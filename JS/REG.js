function validateEmail() {
    var email = document.getElementById("email").value;

    if (email == "" || email.length < 3) {
        document.getElementById("errorname").innerHTML = "please fill up username";
        return false;
    }


}

function validatePass() {
    var password = document.getElementById("pass").value;

    if (password == "") {
        document.getElementById("errorpass").innerHTML = "please fill up the password";
        return false;
    }
}

function validate() {
    var email = validateEmail(),
      pass = validatePass();
    return email && pass;
}