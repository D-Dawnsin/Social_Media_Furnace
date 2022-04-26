const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "Markiewicz_Admin" && password === "3yBCJt5v9Mkn4nvL") {
        location.href = "admin_dash.html";
    } else {
        alert("Invalid Login");
    }
})
