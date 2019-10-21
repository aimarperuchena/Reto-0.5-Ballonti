$(document).ready(function() {
    $(".serImg").hover(function() {
        //$(this).css('box-shadow', '10px 10px 5px #888');
        $(this).css('border', "2px solid blue");
    });
    $(".serImg").mouseout(function() {
        $(this).css('border', "0px solid blue");
    });






});