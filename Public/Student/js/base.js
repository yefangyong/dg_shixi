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
    
    $('.ui-head .tabs').each(function(){
      var $this=$(this);
      var cWidth=0;
      $this.find('li').each(function(){
        cWidth=cWidth+$(this).outerWidth(true);
      });
      if(cWidth>$this.width()){
        $this.addClass('has-scroll');
      }else{
        $this.removeClass('has-scroll');
      }

      $this.find('.aw.prev').click(function(){
        var sl=$this.find('.ct').scrollLeft();
        $this.find('.ct').animate({'scrollLeft': sl-100}, 50);
      });
      $this.find('.aw.next').click(function(){
        var sl=$this.find('.ct').scrollLeft();
        $this.find('.ct').animate({'scrollLeft': sl+100}, 50);
      });

      var index=$this.find('li').index($this.find('.on').parents('li'));
      var length=$this.find('li').length;
      if(index>length/2){
        $this.find('.ct').animate({'scrollLeft': 1000}, 0);
      }

    });

    $('.ui-table >.ct').each(function(){
      var $this=$(this);
      var cWidth=$this.find('table').width();

      $this.find('.aw.prev').click(function(){
        var sl=$this.find('.tb').scrollLeft();
        $this.find('.tb').animate({'scrollLeft': sl-80}, 100);
      });
      $this.find('.aw.next').click(function(){
        var sl=$this.find('.tb').scrollLeft();
        $this.find('.tb').animate({'scrollLeft': sl+80}, 100);
      });

    });

    $('nav.navi >.ct').height(height-$('nav.navi >.hd').height());

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