const loginForm = document.querySelector("form");
const passWord = document.querySelector(".password");
const userName = document.querySelector(".username");
const hideError = document.querySelector("input");
const showPass = document.querySelector("#show");
const errorMsg = document.querySelector("#error");
errorMsg.style.color = 'red';


// Show password

showPass.addEventListener('input', (e) => {
    e.preventDefault();

    if (passWord.type === "password") {
        passWord.type = "text";

    }
    else {
        passWord.type = "password";
    }
});


// Hide Error message

hideError.addEventListener('input', (e) => {
    e.preventDefault();
    errorMsg.textContent = "";
});












