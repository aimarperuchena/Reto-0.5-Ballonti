$(document).ready(function() {
    $(".serImg").hover(function() {
        $(this).css('border', "2px solid blue");
    });
    $(".serImg").mouseout(function() {
        $(this).css('border', "0px solid blue");
    });
});