function chooseImage() {
    $('#image-input').click();
}

function updateIcon() {
    if (!$('#image-icon').hasClass('fa-pencil-alt')) {
        $('#image-icon').removeClass('fa-plus');
        $('#image-icon').addClass('fa-pencil-alt');
    }
}

function readURL(input) {
    updateIcon();
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#image-preview').css('background-image', 'url(' + e.target.result + ')');
            $('#image-preview').fadeIn(450);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
