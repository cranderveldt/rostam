jQuery(document).ready(function($){
  //if
  setTimeout(function(){
    $('.v-line, .h-line').addClass('extend');
  }, 1000);
  //else
  $('#menu-main-menu li a').each(function(){
    $(this).html('<i class="fa fa-' + $(this).prop('title') + '"></i>')
  });
});