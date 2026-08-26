document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();

    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    const xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
        const response = JSON.parse(this.responseText);
        const messageEl = document.getElementById("message");


        if (response.status == "success") {
            // no apikey to store — the session cookie is already set
            //WAS planning on initially using API key to validate stuff
            // by the server's response headers, invisibly.
            window.location.href = "index.php";
        } else {
           messageEl.textContent = "Incorrect email or password.";
           messageEl.classList.add("error", "show");
        }
    };

    xhttp.open("POST", "api.php", true);
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.send(JSON.stringify({
        type: "Login",
        email: email,
        password: password
    }));
});