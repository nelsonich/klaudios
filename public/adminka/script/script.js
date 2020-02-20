$(document).ready(function() {
    $(".closeAlert").on('click', function() {
        $(this).parent().remove();
    });
});