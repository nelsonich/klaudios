$(document).ready(function () {
    setTimeout(() => {
        $(".spinner").addClass('d-none');
        $("#pills-tabContent .tab-pane").removeClass('d-none');
    }, 5000);
});
