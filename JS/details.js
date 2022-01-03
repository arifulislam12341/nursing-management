function validateName() {
    var fname = document.getElementById("name").value;

    if (fname == "" || fname.length < 2) {
        document.getElementById("errorname").innerHTML = "please fill up username";
        return false;
    }


}



function validateContact() {
    var contact = document.getElementById("contact").value;

    if (contact == "" ||  contact.length < 11) {
        document.getElementById("errorcon").innerHTML = "please fill up the contact number";
        return false;
    }
}

function validateserial() {
    var serial = document.getElementById("serial").value;

    if (serial == "" || serial.length > 0) {
        document.getElementById("errorsr").innerHTML = "please fill up Serial NUmber";
        return false;
    }


}
// function validateForm() {
//     var validation = true;
//     validation &= validateEmail();
//     validation &= validatePass();
//     return validation;
// }
function validate() {
    var fname = validateName(),
      contact = validateContact();
      serial = validateserial();
    return fname && contact && serial;
}