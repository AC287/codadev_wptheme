/*
// 2. This code loads the IFrame Player API code asynchronously.
// var tag = document.createElement('script');
//
// tag.src = "https://www.youtube.com/iframe_api";
// var firstScriptTag = document.getElementsByTagName('script')[0];
// firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// Create YouTube player(s) after the API code downloads.
var playerrd;
var playermanufacturing;
var playerqa;
var playersourcing;
var playerscm;
var playerpartnership;

function onYouTubeIframeAPIReady() {
    playerrd = new YT.Player('playerrd');
    playermanufacturing = new YT.Player('playermanufacturing');
    playerqa = new YT.Player('playerqa');
    playersourcing = new YT.Player('playersourcing');
    playerscm = new YT.Player('playerscm');
    playerpartnership = new YT.Player('playerpartnership');
}

// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    // height: '390',
    // width: '640',
    videoId: 'H5Iw617dwZc',
    events: {
      'onReady': onPlayerReady,
      // 'onStateChange': onPlayerStateChange
    },
    playerVars: {
      'controls': 0,
      'loop': 1,
      'rel': 0,
      'playlist': 'H5Iw617dwZc',
    }
  });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo();
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;
function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING && !done) {
    setTimeout(stopVideo, 6000);
    done = true;
  }
}
function stopVideo() {
  player.stopVideo();
}
*/

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
