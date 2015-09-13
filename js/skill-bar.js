$(window).scroll(function() {
  if ($('#skills').visible(true)) {
    $('.skillbar').each(function(){
      $(this).find('.skillbar-bar').animate({
        width:$(this).attr('data-percent')
      },1500);
    });
  }
});
