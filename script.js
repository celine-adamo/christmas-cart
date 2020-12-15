const formulaire = document.getElementById("contact-form");

formulaire.addEventListener('submit', e => {
  e.preventDefault();
  const formData = new FormData(formulaire);
  //nouvelle instance de la classe FormData
  fetch('assets/mail.php',{
    method: "POST",
    body: formData
  })
  .then(response => formulaire.reset())
  .catch(error=>{
    console.error(error);
  })

})


