$("fieldset legend").click(function() {
    $(this).parent().find("div").slideToggle();
});

$('html').dblclick(function() {

    $("fieldset legend").parent().find("div").slideToggle();

});

$(document).ready(function() {
    $("fieldset").find("div").slideUp();
    //$("pre").addClass("prestyle");

});

$(document).ready(function() {
    $(".sticker-left.sticker-info").addClass("sticker-hidden");
});

$(".sticker-left.sticker-info").dblclick(function() {
    $(this).toggleClass("sticker-hidden");

});

/* Munu */
$("#icon").click(function() {
    $("#nav").toggleClass("menu-open");
    $(".menu").slideDown("slow");

});