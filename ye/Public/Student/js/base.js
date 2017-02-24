function initializePage(){
  bindOnResize();
  bindToggleOn();
  //
  loadAgent();
}

/*---------------method---------------*/
//
function bindOnResize(){
  var resize=function(){
    var height=$(window).height();
    $('.full-height').height(height);
    $('.ui-main').height(height-115);
  }
  resize();
  $(window).resize(function(event) {
    resize();
  });
}
function bindToggleOn(){
  $('toggle-on').click(function(event) {
    $(this).toggleClass('on');
  });
}
function loadAgent(){
  try{
    var $agent=$('<script type="text/javascript" src="js/agent/agent.js"></script>');
    $agent.appendTo('body');

    console.info('w3cutagent loaded.')
  }catch(e){

  }
}