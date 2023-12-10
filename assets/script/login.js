let emailRegEx = /^\w+[._-]?\w+@[a-z]+\.[a-z]{2,3}/;
let passwordRegEx = /^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9]{7,}/;

let emailField = document.getElementById("email");
let passwordField = document.getElementById("password");

let loginBtn = document.getElementById("submit");

loginBtn.addEventListener("click", function (event) {
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;

  if (email == "") {
    alert("Please enter your Email.");
    emailField.style.border = "1.5px solid red";
    event.preventDefault();
  } else if (password == "") {
    alert("Please enter your Password.");
    passwordField.style.border = "1.5px solid red";
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
