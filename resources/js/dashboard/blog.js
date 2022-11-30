$(document).ready(function () {
    $("input#intro").on('keyup', function () {
        $("#introCounter").text($(this).val().length);
    });

    const $cover = $("#cover");

    $("#selectCover").click(function () {
        $cover.click();
    });

    $cover.on('change', () => previewFile());
});

function previewFile() {

    const $coverContainer = $("#coverContainer");
    const file = document.querySelector('input#cover').files[0];
    const reader = new FileReader();

    reader.addEventListener("load", function () {
        // convert image file to base64 string
        $coverContainer.attr('style', `background-image: url(${reader.result})`);
    }, false);

    if (file) {
        reader.readAsDataURL(file);
    }
}