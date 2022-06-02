document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    form.addEventListener('submit', formSend);

    async function formSend(e) {
        e.preventDefault();
        let error = formValidate(form);
        let formData = new FormData(form);
        if (error === 0) {
            let response = await fetch('src/form_handler.php', {
                method: 'POST',
                body: formData
            });
            let result = await response.json();
            if (result.status == 200) {
                removeChangeStyle();
            } else {
                let form = document.getElementById('form');
                let image = document.getElementById('image');
                let title = document.getElementById('title');
                image.remove();
                form.remove();
                title.remove();
                const p = document.createElement('p');
                let popup = document.querySelector('.popup');
                p.innerHTML = result.message;
                p.className = 'Error';
                popup.appendChild(p);
            }
        }
    }
    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll('._req');

        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];
            formRemoveError(input);

            if (input.classList.contains('_email')) {
                if (emailTest(input)) {
                    formAddError(input);
                    error++;
                }
            } else if (input.classList.contains('_name')) {
                if (nameTest(input)) {
                    formAddError(input);
                    error++;
                }
            } else {
                if (input.value === '') {
                    formAddError(input);
                    error++;
                }
            }
        }
        return error;
    }
    function formAddError(input) {
        input.classList.add('_error');
    }
    function formRemoveError(input) {
        input.classList.remove('_error');
    }
});

function emailTest(input) {
    return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
}

function nameTest(input) {
    return !/^[a-zа-яё]+$/i.test(input.value);
}