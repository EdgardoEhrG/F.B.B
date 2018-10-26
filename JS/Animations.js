$(document).ready(function() {
  $('.MenueB').click(function(){
    $('#MenueD').slideToggle(400);
    $('#Show').toggleClass("fa-unlock-alt fa-rotate-180 fa-spin");
  });
});
