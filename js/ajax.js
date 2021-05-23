var form = document.querySelectorAll(".form");
form.forEach((form) => {
    form.addEventListener('submit', (sobitye) => {
        sobitye.preventDefault();

        var id = form.querySelector("input[name='button_id']");
        var danni = "&button_id=" + id.value;

        var ajax = new XMLHttpRequest();
        ajax.open("POST", form.action, false);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.send(danni);

    });
});

