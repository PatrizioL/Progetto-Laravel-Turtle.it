let logout_button = document.querySelector('#logout-button');
let logout_form = document.querySelector('#logout-form');


if (logout_button) {
    logout_button.addEventListener('click', (event) => {
        event.preventDefault();
        logout_form.submit();
    })
}


