$('#article').summernote({
    height: 300
});

String.prototype.permalink = function () {
    return this.toString().trim().toLowerCase().replace(/\s/g, '-');
}


$('.origin-text').on('focusout', function () {

    $('.target-text').val($(this).val().permalink());

})

$('input[type="file"]').change(function (e) {
    var fileName = e.target.files[0].name;
    $('.custom-file-label').html(fileName);
});
