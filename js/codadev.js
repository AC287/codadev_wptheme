jQuery(document).ready(function($) {
  // $('.top-nav').click(function(){
  //   console.log('CLICKED HEHEHE');
  // })
  console.log('Today is 11/2 (a)');

  $('.header-navicon').click(function(){
    var x = $('#header-rnav').attr('class').split(' ');
    console.log(x.length);
    if(x.length===1){
      $('#header-rnav').addClass('responsive');
    }
    else {
      $('#header-rnav').removeClass('responsive');
    }
  })

  $('.navi1-btn a').bind({
    mouseenter: function(){
      var currClass = '.'+$(this).attr('class')+' .header-navi-selector';
      // console.log(currClass);
      $(currClass).css({
        // 'transform':'scale(1.5)',
        'display':'block',
      })
    },
    mouseleave: function(){
      var currClass = $(this).attr('class');
      // if (currClass != getCurrentLocation())
      switch (currClass) {
        case 'home':
          if (getCurrentLocation() == ''){
            break;
          }
        default:
          // console.log(currClass);
          if (currClass == getCurrentLocation()){
            break;
          } else {
            $('.'+currClass+' .header-navi-selector').css ({
              'display':'none',
            })
            break;
          }
      }
    }
  })
  // });

  function getCurrentLocation() {
    var curLocation = $(location).attr('href').split('/');
    return (curLocation[3]);
  }

  switch (getCurrentLocation()) {
    case "":
      // $('.home').css('border-bottom', '1px solid #fff');
      // $('.home').css('box-shadow','0px 10px 0px -7px #fff');
      navigationSelector('home');
      break;
    default:
      navigationSelector(getCurrentLocation());
      break;
  }
  function navigationSelector(x){
    // $('.'+ x + ' . header-navi-title').css('height', '11px');
    // console.log(x);
    $('.'+ x + ' .header-navi-selector' ).css({'display' : 'block',});

    return;
  }
  /* - - - Pressing ESC will reset everything - - - */
  $(document).keydown(function(e){
    // console.log(e);
    if(e.keyCode==27){  //this listen for "ESC" key.
      $('.ip-modal').css('display','none');
      $('.ip-slides').css('display','none');
      $('.team-modal').css('display', 'none');
      $('.team-modal-content').css('display','none');
    }
  })

  /* - - - VIDEO PLAYER - - - */
/*
source: https://stackoverflow.com/questions/12522291/pausing-youtube-iframe-api-in-javascript
*/
  var yt_int, yt_players={}, initYT = function() {
    $(".ytplayer").each(function() {
      yt_players[this.id] = new YT.Player(this.id);
    });
  };
  $.getScript("//www.youtube.com/player_api", function() {
      yt_int = setInterval(function(){
          if(typeof YT === "object"){
              initYT();
              clearInterval(yt_int);
          }
      },500);
  });
  $('section').hover(
    function(){
      var curSection = 'player' + $(this).attr('id').split('-')[1];
      console.log(curSection);
      yt_players[curSection].playVideo();
    },
    function(){
      var curSection = 'player' + $(this).attr('id').split('-')[1];
      yt_players[curSection].pauseVideo();
    }
  )
})
