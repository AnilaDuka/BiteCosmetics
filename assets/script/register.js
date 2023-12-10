let firstnameRegEx = /^[A-Z][a-z]{2,10}$/;
let lastnameRegEx = /^[A-Z][a-z]{2,10}$/;
let emailRegEx = /^\w+[._-]?\w+@[a-z]+\.[a-z]{2,3}$/;
let passwordRegEx = /^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9]{7,}/;

let firstnameField = document.getElementById("first-name");
let lastnameField = document.getElementById("last-name");
let emailField = document.getElementById("email");
let passwordField = document.getElementById("password");

let loginBtn = document.getElementById("submit");

loginBtn.addEventListener("click", function (event) {
  let firstname = document.getElementById("first-name").value;
  let lastname = document.getElementById("last-name").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;

  if (firstname == "") {
    alert("Please enter your Firstname.");
    firstnameField.style.border = "1.5px solid red";
    event.preventDefault();
  } else if (lastname == "") {
    alert("Please enter your Lastname.");
    lastnameField.style.border = "1.5px solid red";
    event.preventDefault();
  } else if (email == "") {
    alert("Please enter your Email.");
    emailField.style.border = "1.5px solid red";
    event.preventDefault();
  } else if (password == "") {
    alert("Please enter your Password.");
    passwordField.style.border = "1.5px solid red";
    event.preventDefault();
  } else if (!firstnameRegEx.test(firstname)) {
    alert("Please enter a valid Firstname");
    firstnameField.style.border = "1.5px solid red";
    event.preventDefault();
  } else if (!lastnameRegEx.test(lastname)) {
    alert("Please enter a valid Lastname");
    lastnameField.style.border = "1.5px solid red";
    event.preventDefault();
  } else if (!emailRegEx.test(email)) {
    alert("Please enter a valid Email.");
    emailField.style.border = "1.5px solid red";
    event.preventDefault();
  } else if (!passwordRegEx.test(password)) {
    alert("Please enter a valid Password");
    passwordField.style.border = "1.5px solid red";
    event.preventDefault();
  } else {
  }
});
