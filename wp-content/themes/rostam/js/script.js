jQuery(document).ready(function($){
  // $('.page-tile').height($(window).height()/2);
  $('.page-tile .preview').on('click', function(){
    $(this).parent().addClass('active').css('z-index', 100).siblings().css('z-index', 0);
  });
  $('.controls').on('click', function(){
    console.log('what');
    $(this).parent().parent().toggleClass('active').css('z-index', 2).siblings().css('z-index', 1);
  });
});