$('input[type="file"]').change(function () {
    var fileName = $(this).val().replace(/C:\\fakepath\\/i, '');
    $("#file-name").text(fileName);
});

$(document).ready(function () {
    $('button[type="reset"]').click(function () {
        $('#preview-img').attr('hidden', true);
        $('#preview-img').css('background-image', '');
        $("#file-name").text('');
    })

    $('#input-file').on('change', function(){
        readURL(this);
        //Doesn't have file type validate
    })
})

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#preview-img').css('background-image', 'url(' + e.target.result + ')');
        }
        $('#preview-img').removeAttr('hidden');

        reader.readAsDataURL(input.files[0]);
    }
}