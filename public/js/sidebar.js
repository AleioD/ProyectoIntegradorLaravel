$(document).ready(function () {
$('#sidebar').on('click', function () {
  $('.collapse.in').toggleClass('in');
  $('a[aria-expanded=true]').attr('aria-expanded', 'false');
});

$('#sidebarCollapse').on('click', function () {
  $('#sidebar').toggleClass('active');
  $('.overlay').toggleClass('active');
});

$('#dismiss').on('click', function(){
  $('#sidebar').removeClass('active');
  $('.overlay').removeClass('active');
});

$('.overlay').on('click', function(){
$('#sidebar').toggleClass('active');
$('.overlay').toggleClass('active');
});
});
