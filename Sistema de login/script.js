function validateForm() {
    var user = document. getElementById("username").value;
    var user = document. getElementById("password").value;
    if(user=== "" || pass=== "") {
        alert ("Preencha todos os campos.");
        return false;
    }
}
return true;
