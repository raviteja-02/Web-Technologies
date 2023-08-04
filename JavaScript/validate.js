function validateForm() {
    // Get the form details
    const nameInput = document.getElementById("name").value.trim();
    const passwordInput = document.getElementById("password").value;

    // Validate name field
    if (nameInput.length < 4) {
        alert("Please enter your name.");
        nameInput.focus();
        return false;
    } else if (passwordInput.length < 6) {
        alert("Password must be at least 6 characters long.");
        passwordInput.focus();
        return false;
    } else {

        // If all validation passes, you can submit the form programmatically:
        // form.submit();

        // For this example, let's just display a success message
        alert("Registration successful!");
        form.reset();
    }
    
    return true; 
}