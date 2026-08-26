//for switching between 'login' and 'create account'
function switchAuth(which) {
    const tabSignin = document.getElementById("tabSignin");
    const tabRegister = document.getElementById("tabRegister");
    const formSignin = document.getElementById("login-form");
    const formRegister = document.getElementById("register-form");

    if (which === "signin") {
        tabSignin.classList.add("active");
        tabRegister.classList.remove("active");
        formSignin.classList.add("active");
        formRegister.classList.remove("active");
    } else {
        tabRegister.classList.add("active");
        tabSignin.classList.remove("active");
        formRegister.classList.add("active");
        formSignin.classList.remove("active");
    }
}