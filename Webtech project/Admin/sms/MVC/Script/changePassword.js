
function validation() {
    var cpas = document.getElementById("cpas").value;
    var npass = document.getElementById("npass").value;
    var rnpass = document.getElementById("rnpass").value;
    var error_message = document.getElementById("error_message");
    var text = "";

    if(cpas == "" || npass == "" || rnpass == "") {
        text = "Please fill all the fields.";
    } else {
        if (npass == cpas) {
            text = "Your current password and new password are the same.";
        } else {
            if (npass != rnpass) {
                text = "New password and Retype New password mismatch!";
            } else {
                if (npass.length < 8) {
                    text = "Password should be at least 8 characters long.";
                }
            }
        }
    }

    error_message.innerHTML = text;
    return text === ""; 


}
