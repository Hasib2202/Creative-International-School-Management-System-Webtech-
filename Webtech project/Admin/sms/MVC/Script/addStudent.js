function validation() {
    var id = document.getElementById("id").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var password = document.getElementById("password").value;
    var repass = document.getElementById("confirm_password").value; // Changed to match your HTML
    var gender = document.getElementById("gender").value;
    var dob = document.getElementById("dob").value;
    var error_message = document.getElementById("error_message");
    var text;

    if (id == "" || name == "" || email == "" || mobile == "" || password == "" || repass == "" || gender == "" || dob == "") {
        text = "Please fill all the fields.";
        error_message.innerHTML = text;
        return false;
    } else {
        if (password.length < 8) {
            text = "Password should be at least 8 characters long!";
            error_message.innerHTML = text;
            return false;
        } else {
            if (password !== repass) {
                text = "Password and Confirm Password do not match!";
                error_message.innerHTML = text;
                return false;
            } else {
                if (email.length < 6 || !email.includes("@")) {
                    text = "Please enter a valid email.";
                    error_message.innerHTML = text;
                    return false;
                } else {
                    if (isNaN(id)) {
                        text = "ID must be a number.";
                        error_message.innerHTML = text;
                        return false;
                    }
                    if (id.length != 4) {
                        text = "ID must be 4 digits long.";
                        error_message.innerHTML = text;
                        return false;
                    }
                    if (isNaN(mobile)) {
                        text = "Mobile number must be a number.";
                        error_message.innerHTML = text;
                        return false;
                    }
                    if (mobile.length != 11) {
                        text = "Mobile number must be 11 digits long.";
                        error_message.innerHTML = text;
                        return false;
                    }

                    if (name.length < 3) {
                        text = "Name is too short.";
                        error_message.innerHTML = text;
                        return false;
                    } else {
                        for (i = 0; i < name.length; i++) {
                            ch = name.charAt(i);
                            if (!(ch >= 'a' && ch <= 'z') && !(ch >= 'A' && ch <= 'Z') && !(ch == ' ')) {
                                text = "Name should contain only characters.";
                                error_message.innerHTML = text;
                                return false;
                            }
                        }
                    }
                    return true;
                }
            }
        }
    }
}
