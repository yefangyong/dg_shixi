$(function(){
  initializePage();
  $('.carousel').bind('move', function(event){
    if(Math.abs(event.deltaX)<10){
      return;
    }
    if(event.deltaX>0){
      $(this).carousel('prev');
    }
    if(event.deltaX<0){
      $(this).carousel('next');
    }
  });

  $('.ui-alert >p .bt').click(function(event) {
    $('body').removeClass('on-mask');
    $('.ui-alert').hide();
    return false;
  });

  $('.ui-form .select').hover(function() {
    $(this).addClass('on');
  }, function() {
    $(this).removeClass('on');
  });
  $('.ui-form .select >.ex p a').click(function(event) {
    $(this).parents('.select').children('p').find('a').addClass('on').text($(this).text());
    $(this).parents('.select').removeClass('on');
    return false;
  });
  $('.ui-form .textarea').each(function(index, el) {
    var $this=$(this);
    $this.find('textarea').keyup(function(event) {
      $this.find('label').text($this.find('textarea').val().length+'/2000');
    });
  });
  $('.ui-filter .select').hover(function() {
    $(this).addClass('on');
  }, function() {
    $(this).removeClass('on');
  });
  $('.ui-filter .select >.ex a').click(function(event) {
    $(this).parents('.select').children('p').find('a').addClass('on').text($(this).text());
    $(this).parents('.select').removeClass('on');
    $(this).parents('.select').children('.ex').find('a').removeClass('on');
    $(this).addClass('on');
    return false;
  });
  $('.ui-table table .cbox').click(function(event) {
    $(this).toggleClass('on');
    return false;
  });
  $('.ui-form .stars a').click(function(event) {
    $('.ui-form .stars a').removeClass('on');
    $(this).prevAll().andSelf().addClass('on');
    return false;
  });
  $('.ui-export .rbox').click(function(event) {
    $(this).parents('p').find('.rbox').removeClass('on');
    $(this).addClass('on');
    return false;
  });
  $('.ui-export .cbox').click(function(event) {
    $(this).toggleClass('on');
    return false;
  });
  $('.ui-form .rbox').click(function(event) {
    $(this).parents('p').find('.rbox').removeClass('on');
    $(this).addClass('on');
    return false;
  });
  $('.ui-table .tool p .rbox').click(function(event) {
    $(this).parents('p').find('.rbox').removeClass('on');
    $(this).addClass('on');
    return false;
  });
  $('.ui-paging .cbox').click(function(event) {
    if($(this).hasClass('on')){
      $('.ui-table table .cbox').removeClass('on');
      $(this).removeClass('on');
    }else{
      $('.ui-table table .cbox').addClass('on');
      $(this).addClass('on');
    }
    return false;
  });


  
});

/*---------------method---------------*/
//