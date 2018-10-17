// JavaScript Document

$(function(){

    //初始化
    var myShakeEvent = new Shake({
        threshold: 10,   //震动强度
        timeout: 1000    //事件的频率(时间)
    });

    //开始监听
    myShakeEvent.start();

    //绑定函数
    window.addEventListener('shake', shakeEventDidOccur, false);

    //函数调用时发生动摇
    function shakeEventDidOccur () {
        if (shakeNum >= 3) {
          return false;
        }

        playMusic('btn-menu', 'bgmusic', 'play');

        if(!$('.shark_icon02').hasClass('animated shake')){

            $('.shark_icon02').addClass('animated shake');
            setTimeout(function(){
                $('.shark_icon02').removeClass('animated shake');
            }, 1500);
        }
         
    }

    
    /**
     * 音乐播放/暂停
     */
    function playMusic(mSwitchClassName, musicId, onoff) {
        if (onoff == 'play') {
          $('.' + mSwitchClassName).addClass('play').removeClass('pause');
          $('#' + musicId)[0].play();
        } else {
          $('.' + mSwitchClassName).addClass('pause').removeClass('play');
          $('#' + musicId)[0].pause();
        }
    }

});