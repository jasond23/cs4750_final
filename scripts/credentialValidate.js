/* Sources used:
https://stackoverflow.com/questions/46155/whats-the-best-way-to-validate-an-email-address-in-javascript */

$(document).ready(function () {
  document.getElementById("password").addEventListener("keyup", function () {
    passwordValidate(8);
  });

  function passwordValidate(len = 8) {
    var pass = document.getElementById("password");
    var submit = document.getElementById("submit");
    var pwhelp = document.getElementById("pwhelp");
    var passval = pass.value;

    if (passval.length < len) {
      pass.classList.add("is-invalid");
      submit.disabled = true;
      pwhelp.textContent =
        "Please enter a " +
        len +
        "-character password. Only letters and numbers allowed. ";
    } else {
      pass.classList.remove("is-invalid");
      submit.disabled = false;
      pwhelp.textContent = "";
    }
  }
});
