function validateSearch() {
    var searchInput = document.getElementById("search").value;
    var error_message = document.getElementById("error_message");
    var text;

    if (searchInput.trim() === "") {
        text = "Please enter a search query.";
        error_message.innerHTML = text;
        return false;
    } else if (searchInput.length < 3) {
        text = "Search query must be at least 3 characters long.";
        error_message.innerHTML = text;
        return false;
    }

    return true;
}
