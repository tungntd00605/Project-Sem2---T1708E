$('input[type="file"]').change(function () {
    var fileName = $(this).val().replace(/C:\\fakepath\\/i, '');
    $("#file-name").text(fileName);
});