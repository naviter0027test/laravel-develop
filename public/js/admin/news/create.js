$(document).ready(function() {
    $('.newsCreate').on("submit", function() {
        var content = CKEDITOR.instances.content.getData();
        $('[name=content]').val(content);
    });
});
