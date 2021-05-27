btnregistration.onclick = function () {
        registrationForm.style.display = "block";
        enterForm.style.display = "none";
    }

registrationCloseBtn.onclick = function () {
    registrationForm.style.display = "none";
    enterForm.style.display = "block";
    }

btnSignUp.onclick = function () {
    if (!(pas[0].value === pas[1].value)) {
        alert("Паролі не співпадають!");
    }
    if (pas[0].value, pas[1].value, email[0].value === "") {
        alert("Введіть пароль/email")
    }
    if ((pas[0].value === pas[1].value && pas[0].value, pas[1].value !== "")) {
        alert("Вітаємо Вас зареєстровано!");
        registrationForm.style.display = "none";
        }
}
