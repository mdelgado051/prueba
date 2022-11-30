import Toastify from 'toastify-js'

const $leadForms = document.querySelectorAll('.contactLeadForm');
listenContactFormSubmit();
let successToastConfig = {
    text: "Mensaje enviado",
    duration: 4000,
    close: true,
    gravity: "top",
    positionLeft: false,
    backgroundColor: "#0028CD",
    className: 'custom-toast'
};
let errorToastConfig = {
    text: "Ha ocurrido un error, revisa tu información e inténtalo de nuevo",
    duration: 4000,
    close: true,
    gravity: "top",
    position: 'left',
    positionLeft: false,
    backgroundColor: "blue",
    className: 'custom-toast'

};

function listenContactFormSubmit() {

    $leadForms.forEach($form => {
        $form.addEventListener('submit', function (event) {
            event.preventDefault();
            submitForm($form);
        });
    });
}

function submitForm($form) {
    let fd = new FormData($form);
    let meta = {
        action: $form.attributes.getNamedItem('action').value,
        method: $form.attributes.getNamedItem('method').value,
    };
    toggleContactFormStatus($form, true);
    fetch(meta.action, {
        method: meta.method,
        credentials: 'include',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').attributes.getNamedItem('content').value
        },
        body: fd
    }).then(function (response) {
        toggleContactFormStatus($form, false);
        return response.json();
    }).then(function (json) {
        if (json.success) {
            $form.reset();
        }
        notify(json);
    }).catch(function (error) {
        toggleContactFormStatus($form, false);
        notify(error);
    });
}

function notify(data) {
    let toast;
    if (data.success) {
        toast = successToastConfig;
        toast.text = data.message;
    } else {
        toast = errorToastConfig;
        toast.text = data.message ? data.message : data.error;
    }
    Toastify(toast).showToast();
}

function toggleContactFormStatus($form, isDisabled) {
    let formControls = $form.querySelectorAll('input, button[type="submit"]');
    formControls.forEach((element) => {
        element.disabled = isDisabled;
    })
}
