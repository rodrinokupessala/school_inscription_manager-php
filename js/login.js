const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

/*
const frm_login = document.querySelector("#frm_login");
 
frm_login.addEventListener("submit", event => {
  event.preventDefault();

  var elements = document.getElementsByClassName("sign-in-form");

  const formEntries = new FormData(frm_login).entries();
const formData = Object.assign(...Array.from(formEntries, ([x,y]) => ({[x]:y})));
   
  console.log(formData)

  let _data = {username_l:'rodrino23',password_l:'A1234i/*'}
  
  fetch('login.php', {
    method: "POST",
    body: JSON.stringify(formData),
    headers: {"Content-type": "application/json; charset=UTF-8"}
  })
  .then(response => response.json()) 
  .then(json => console.log(json));
 /// .catch(err => console.log(err));


  

});

*/