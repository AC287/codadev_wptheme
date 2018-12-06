jQuery(document).ready(function($) {
  // $('.top-nav').click(function(){
  //   console.log('CLICKED HEHEHE');
  // })

  // GET window size:
  var curWinWidth = $(window).width();

  // console.log(curWinWidth);


  // console.log(aspectRatio);

  $('.header-navicon').click(function(){
    var x = $('#header-rnav').attr('class').split(' ');
    // console.log(x.length);
    if(x.length===1){
      $('#header-rnav').addClass('responsive');
    }
    else {
      $('#header-rnav').removeClass('responsive');
    }
  })

  // $('.navi1-btn a').bind({
  //   mouseenter: function(){
  //     var currClass = '.'+$(this).attr('class')+' .header-navi-selector';
  //     // console.log(currClass);
  //     $(currClass).css({
  //       // 'transform':'scale(1.5)',
  //       'display':'block',
  //     })
  //   },
  //   mouseleave: function(){
  //     var currClass = $(this).attr('class');
  //     // if (currClass != getCurrentLocation())
  //     switch (currClass) {
  //       case 'home':
  //         if (getCurrentLocation() == ''){
  //           break;
  //         }
  //       default:
  //         // console.log(currClass);
  //         if (currClass == getCurrentLocation()){
  //           break;
  //         } else {
  //           $('.'+currClass+' .header-navi-selector').css ({
  //             'display':'none',
  //           })
  //           break;
  //         }
  //     }
  //   }
  // })
  // });

  // function getCurrentLocation() {
  //   var curLocation = $(location).attr('href').split('/');
  //   return (curLocation[3]);
  // }
  //
  // switch (getCurrentLocation()) {
  //   case "":
  //     // $('.home').css('border-bottom', '1px solid #fff');
  //     // $('.home').css('box-shadow','0px 10px 0px -7px #fff');
  //     navigationSelector('home');
  //     break;
  //   default:
  //     navigationSelector(getCurrentLocation());
  //     break;
  // }
  // function navigationSelector(x){
  //   // $('.'+ x + ' . header-navi-title').css('height', '11px');
  //   // console.log(x);
  //   $('.'+ x + ' .header-navi-selector' ).css({'display' : 'block',});
  //
  //   return;
  // }


  /* - - - Pressing ESC will reset everything - - - */
  // $(document).keydown(function(e){
  //   // console.log(e);
  //   if(e.keyCode==27){  //this listen for "ESC" key.
  //     $('.ip-modal').css('display','none');
  //     $('.ip-slides').css('display','none');
  //     $('.team-modal').css('display', 'none');
  //     $('.team-modal-content').css('display','none');
  //   }
  // })

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
      },750);
  });

  // $('section').hover(
  //   function(){
  //     var curSection = 'player' + $(this).attr('id').split('-')[1];
  //     console.log(curSection);
  //     yt_players[curSection].playVideo();
  //   },
  //   function(){
  //     var curSection = 'player' + $(this).attr('id').split('-')[1];
  //     yt_players[curSection].pauseVideo();
  //   }
  // );

  /* - - - SCROLL TO - - - */
  $('.index-secnav-box').click(function(){
    var curCategory = $(this).attr('class').split(' ')[1].split('-')[1];
    var scrollToSection = '#index-' + curCategory;
    // var playThis = 'player'+curCategory;
    // var volControl = 'vol'+curCategory;
    $('html, body').animate ({
      scrollTop: $(scrollToSection).offset().top
    }, 2000);
    // $('.index-video-section').each(function(){
    //   var curSection = 'player'+$(this).attr('id').split('-')[1];
    //   // $(this).removeClass('active');
    //   yt_players[curSection].pauseVideo();
    // });
    // // $(this).addClass('active');
    // yt_players[playThis].playVideo();
    // yt_players[playThis].mute();

    /*
      source: https://stackoverflow.com/questions/6677035/jquery-scroll-to-element
      source: https://jsfiddle.net/cse_tushar/Dxtyu/141/
    */
  });

  // $(document).on("scroll",onScroll);
  // console.log($('.index-video-title').height());

/*
  function onScroll(event){
    var scrollPos = $(document).scrollTop();
    var indexNaviSection = Math.round($('.index-videonav-container').position().top);
    var scriptTriggerPos = Math.round($('.index-allvideo-container').position().top);
    // - - - trigger only when scrollPosition is at certain point.
    // if(((indexNaviSection - scrollPos) < 0) && ((indexNaviSection + $('.index-videonav-container').height()) - scrollPos) > 0) {
    //   $('.index-videonav-box').each(function(){
    //     $(this).fadeIn('500');
    //   })
    // } else {
    //   $('.index-videonav-box').each(function() {
    //     $(this).fadeOut('500');
    //   })
    // }
    if((scriptTriggerPos - scrollPos) < 0) {

      $('.index-video-section').each(function () {
        var curSection = $(this);
        var bufferHeight = $('.index-video-title').height();
        // console.log(curSection.attr('id'));
        var secId = curSection.attr('id').split('-')[1];
        var refElement = $('#index-'+secId);
        var playerId = 'player'+secId;
        var volId = '#vol'+secId;
        // console.log(scrollPos);
        // console.log(refElement.position().top);
        //- - - SCROLL EFFECT - - -
        if ((refElement.position().top - bufferHeight) <= scrollPos && (refElement.position().top + refElement.height() - bufferHeight) > scrollPos) {
          $('.index-video-section').removeClass("active");
          // refElement.addClass("active");
          yt_players[playerId].playVideo();
          if($(volId).hasClass('active')){
            yt_players[playerId].unMute();
          } else {
            $(volId).removeClass('glyphicon-volume-up active');
            $(volId).addClass('glyphicon-volume-off');
            yt_players[playerId].mute();
          }
        }
        else{
          // refElement.removeClass("active");

          yt_players[playerId].pauseVideo();
          yt_players[playerId].mute();
          $(volId).removeClass('glyphicon-volume-up active');
          $(volId).addClass('glyphicon-volume-off');
        }
      });

    } else {
      $('.index-video-section').each(function(){
        var playerId = 'player' + $(this).attr('id').split('-')[1];
        yt_players[playerId].pauseVideo();
      })
    }
  }
*/
  /* - - - volume control - - - */
  /*
  $('.ivt2-vol span').click(function(){
    var spanVolElement = $(this);
    var videoId = 'player' + spanVolElement.attr('id').split('vol')[1];
    // console.log(videoId);
    // spanVolElement.toggle('active');
    if (spanVolElement.hasClass('glyphicon-volume-off')){
      spanVolElement.removeClass('glyphicon-volume-off');
      spanVolElement.addClass('glyphicon-volume-up active');
      yt_players[videoId].unMute();
    } else if (spanVolElement.hasClass('glyphicon-volume-up')) {
      spanVolElement.removeClass('glyphicon-volume-up active');
      spanVolElement.addClass('glyphicon-volume-off');
      yt_players[videoId].mute();
    }
  })
  */

  if(curWinWidth < 640) {
    reSizeVideo(curWinWidth);
  }

  $(window).resize(function(){
    var winHeight = $(window).height();
    var winWidth = $(window).width();

    // console.log(winWidth+', '+winHeight);
    if(winWidth < 640) {
      reSizeVideo(winWidth);
    } else {
      reSizeVideo(640);
    }
  })

  $('.ivt2-videolink').click(function(){
    var curId = $(this).attr('id').split('-')[1];
    // console.log(videoId);
    $('.video-modal').css('display','block');
    $('#iv-'+curId).css('display','block');

    $('.video-close').click(function(){
      var iFrameId = 'player'+curId;
      $('.video-modal').css('display','none');
      yt_players[iFrameId].pauseVideo();
      $('#iv-'+curId).css('display','none');
    })

    $(document).keydown(function(e){
      console.log("esc key pressed");
      var iFrameId = 'player'+curId;
      // console.log(e);
      if(e.keyCode==27){  //this listen for "ESC" key.
        $('.video-modal').css('display','none');
        yt_players[iFrameId].pauseVideo();
        $('#iv-'+curId).css('display','none');
      }
    })
  })

  function reSizeVideo(curWidth) {
    $('.vm-content').each(function(index){
      // console.log($(this).find('iframe'));
      $(this).children().attr('width',curWidth);
      var newHeight = Math.round((360/640)*curWidth);
      $(this).children().attr('height',newHeight);
    })
  }

  /*
  - - - TEAM PAGE - - -
  */
  $('.team-crop').click(function(){
    var displayingPerson = '.team-'+$(this).attr('id');
    // console.log($(this).attr('id'));
    $('.team-modal').css('display','block');
    $(displayingPerson).css('display', 'block');

    $('.team-close').click(function(){
      $('.team-modal').css('display','none');
      $(displayingPerson).css('display','none');
    })
  })

  // $('.team-salesmanager-each').hover(function(){
  //   // console.log($(this).attr('class'));
  //   var currState = '#'+$(this).attr('class').split(' ')[1].split('-')[2]+' .cls-1';
  //   // console.log(currState);
  //   $(currState).css({
  //     'fill': '#fff',
  //   })
  // })

  $('.team-salesmanager-each img').bind({
    mouseenter: function(){
      var currState = '#'+$(this).attr('class').split('-')[2]+' .cls-1';
      $(currState).css({
        // 'transform':'scale(1.5)',
        'fill':'rgb(112, 189, 255)',
      })
    },
    mouseleave: function(){
      // var currState = '#'+$(this).attr('class').split(' ')[1].split('-')[2]+' .cls-1';
      $('.cls-1').css({
        'fill':'#036',
      })
    }
  });
  // console.log($('.career-open-each').height());
  /* - - - CAREER EXPAND SECTION - - - */
  $('.career-open-expand a').click(function(){
    // console.log($(this).attr('id'));
    var clickedclass = '.'+$(this).attr('id');
    // var clickedID = '#'+$(this).attr('id');
    // var clickedclassHeight = $(clickedclass).height();
    // var clickedHeightInner = $( clickedclass + ' .career-open-each').height();
    // // console.log(typeof(clickedHeight));
    // if (clickedclassHeight > 150){
    //   $(clickedclass).css({
    //     'height': '150px',
    //   })
    //   $(clickedID).text('Click to expand');
    // } else {
    //   $(clickedclass).css({
    //     'height': clickedHeightInner+'px',
    //   })
    //   $(clickedID).text('Hide');
    // }
    $(clickedclass).css('display','block');

    $('.career-close').click(function(){
      $('.career-modal').css('display','none');
      $(displayingPerson).css('display','none');
    })
  })

  $('#contact_form').on("submit", function(e) {
    e.preventDefault();

    var captcharesponse = grecaptcha.getResponse();

    if(captcharesponse == '') {
      alert('Please check the captcha!');
    }

    if(captcharesponse != ''){
      $('#contact_form')[0].submit();
    }

  })

})
