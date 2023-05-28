$(document).ready(function(){
  $('.irs-from').on('DOMSubtreeModified',function(){
    var number = $(this).text();
    $('#form').val(number);
  });
});

$(".menu-sidebar li:has(ul)").click(function(){
  if ($(this).hasClass('active')) {
    $(this).removeClass('active');
  }else {
    $(this).addClass('active');
  }
});

$(".btn-menu").click(function() {
    $(".menu-side").css({'left':'0'});
    $(".btn-menu-close").css({'left':'0px'});
    $(".btn-menu").css({'display':'none'});
    $(".back-menu").css({'display':'block'});
});

$(".btnmenu").click(function() {
    $(".body").addClass('active');
    $(".menu_sidebar").addClass('active');
    $(".colse").css({'display':'block'});
    $(".body_bg").css({'display':'block'});
    $(".btnmenu").css({'display':'none'});
});
$(".colse").click(function() {
    $(".menu_sidebar").removeClass('active');
    $(".body").removeClass('active');
    $(".colse").css({'display':'none'});
    $(".body_bg").css({'display':'none'});
    $(".btnmenu").css({'display':'block'});
});

$(".body_bg").click(function() {
    $(".menu_sidebar").removeClass('active');
    $(".body").removeClass('active');
    $(".colse").css({'display':'none'});
    $(".body_bg").css({'display':'none'});
    $(".btnmenu").css({'display':'block'});
});
  
function closeMenu() {
  $(".menu-side").css({'left':'-350px'});
  $(".btn-menu-close").css({'left':'-10px'});
  $(".btn-menu").css({'display':'block'});
  $(".back-menu").css({'display':'none'});
}
$(".btn-menu-close").click(function() {
  closeMenu();
}); 
$(".back-menu").click(function() {
  closeMenu();
}); 

$( ".menu-sidebar li:not(.nohide)" ).click(function() {
  $( this ).children('.submen').toggle( "fast", function() {});
  closeMenu();
});
$( ".menu-sidebar li.nohide" ).click(function() {
  $( this ).children('.submen').toggle( "fast", function() {});
});
