function validation() {
    var librarianId = document.getElementById("librarianId").value;
    var librarianName = document.getElementById("librarianName").value;
    var librarianEmail = document.getElementById("librarianEmail").value;
    var librarianMobile = document.getElementById("librarianMobile").value;
    var librarianPassword = document.getElementById("librarianPassword").value;
    var librarianRePassword = document.getElementById("librarianRePassword").value;
    var error_message = document.getElementById("error_message");
    var text;

    if (librarianId == "" || librarianName == "" || librarianEmail == "" || librarianMobile == "" || librarianPassword == "" || librarianRePassword == "") {
        text = "Please fill all the fields.";
        error_message.innerHTML = text;
        return false;
    } else {
        if (isNaN(librarianId)) {
            text = "Librarian ID must be a number.";
            error_message.innerHTML = text;
            return false;
        }
        if (librarianId.length != 4) {
            text = "Librarian ID must be 4 digits long.";
            error_message.innerHTML = text;
            return false;
        }

        if (isNaN(librarianMobile)) {
            text = "Mobile number must be a number.";
            error_message.innerHTML = text;
            return false;
        }
        if (librarianMobile.length != 11) {
            text = "Mobile number must be 11 digits long.";
            error_message.innerHTML = text;
            return false;
        }

        if (librarianPassword.length < 8) {
            text = "Password should be at least 8 characters long!";
            error_message.innerHTML = text;
            return false;
        } else {
            if (librarianPassword !== librarianRePassword) {
                text = "Password and Confirm Password do not match!";
                error_message.innerHTML = text;
                return false;
            }
        }

        if (librarianName.length < 3) {
            text = "Name is too short.";
            error_message.innerHTML = text;
            return false;
        } else {
            for (i = 0; i < librarianName.length; i++) {
                ch = librarianName.charAt(i);
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
