
function isValidPhone(phone) {
    if (phone === '') return true; // optional field — empty is fine
    const cleaned = phone.replace(/[\s-]/g, '');
    const phoneRegex = /^(0[1-9][0-9]{8}|\+27[1-9][0-9]{8})$/;
    return phoneRegex.test(cleaned);
}

document.getElementById("register-form").addEventListener("submit", function(event) {
    event.preventDefault();

    const name = document.getElementById("rName").value.trim();
    const email = document.getElementById("rEmail").value.trim();
    const phonenum = document.getElementById("rPhone").value.trim();
    const password = document.getElementById("rPassword").value.trim();

    if (!isValidPhone(phonenum)) {
    document.getElementById("registerMsg").textContent = "Enter a valid phone number, e.g. 082 123 4567.";
    document.getElementById("registerMsg").classList.add("error", "show"); //for the css class to show the error message
    // to test phone validation:
    // console.log("phone value:", JSON.stringify(phonenum), "valid?", isValidPhone(phonenum));
    return;
    }

    const xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
        const response = JSON.parse(this.responseText);
        const messageEl = document.getElementById("registerMsg");

        if (response.status == "success") {
            window.location.href = "index.php";
        } else {
            messageEl.textContent = response.data;
            messageEl.classList.add("error", "show"); //for the css
        }
    };

    xhttp.open("POST", "api.php", true);
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.send(JSON.stringify({
        type: "Register",
        name: name,
        email: email,
        phonenum: phonenum,
        password: password
    }));
});