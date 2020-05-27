// Function to check Whether both passwords
// is same or not.
function checkPassword(form) {
    password1 = form.password1.value;
    password2 = form.password2.value;
    // If Not same return False.
    if (password1 != password2) {
        alert ("Parolele nu se potrivesc, reincercati!")
        return false;
    }
    // If same return True.
    else{
        return true;
    }
}
