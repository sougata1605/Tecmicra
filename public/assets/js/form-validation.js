document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contactForm");
    const submitBtn = document.getElementById("submitBtn");

    if (!form || !submitBtn) return;

    const inputs = form.querySelectorAll("input[required], textarea[required]");

    const validateForm = () => {
        let isFormValid = true;

        inputs.forEach(input => {
            if (input.type === "file") {
                if (!input.files.length) {
                    isFormValid = false;
                }
            } else {
                if (!input.checkValidity()) {
                    isFormValid = false;
                }
            }
        });

        submitBtn.disabled = !isFormValid;
    };

    inputs.forEach(input => {
        input.addEventListener("input", validateForm);
        input.addEventListener("change", validateForm);
    });

    validateForm();
});
