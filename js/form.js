document.getElementById("registerForm").addEventListener("submit", function (e) {
    const passwordInput = document.getElementById("registerPassword");
    const password = passwordInput.value.trim();
    const passwordError = passwordInput.nextElementSibling;

    const onlySymbols = /^[.,*]+$/;
    passwordInput.classList.remove("is-invalid");
    passwordError.textContent = "";

    // Check length and symbols
    if (password.length < 3) {
        e.preventDefault();
        passwordInput.classList.add("is-invalid");
        passwordError.textContent = "❌ Password must be at least 3 characters.";
        passwordError.style.color = "red";
    } else if (onlySymbols.test(password)) {
        e.preventDefault();
        passwordInput.classList.add("is-invalid");
        passwordError.textContent = "❌ Use letters or numbers, not only symbols.";
        passwordError.style.color = "red";
    }
});
'use strict'
           'use strict';

const forms = document.querySelectorAll('.needs-validation');

Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
        if (form.checkValidity()) {
            event.preventDefault(); 
            alert("✅ Form submitted successfully!");
            form.reset(); 
            form.classList.remove('was-validated'); 
        } else {
            event.preventDefault();
            event.stopPropagation(); 
        }
        form.classList.add('was-validated'); 
    }, false);
});
