function countdown(val) {
    if(val) {var timer2 = val;} else { var timer2 = "45:00";}
    var interval = setInterval(function () {

        var timer = timer2.split(':');
        //by parsing integer, I avoid all extra string processing
        var minutes = parseInt(timer[0], 10);
        var seconds = parseInt(timer[1], 10);
        --seconds;
        minutes = (seconds < 0) ? --minutes : minutes;
        if (minutes < 0) clearInterval(interval);
        seconds = (seconds < 0) ? 59 : seconds;
        seconds = (seconds < 10) ? '0' + seconds : seconds;
        //minutes = (minutes < 10) ?  minutes : minutes;
        $('.countdown').html(minutes + ':' + seconds);
        timer2 = minutes + ':' + seconds;
        if (timer2 === '0:11') {
            $('<audio class="sound-player" autoplay="autoplay" style="display:none;">'
                + '<source src="snd/alert.mp3" />'
                + '<embed src="snd/alert.mp3" hidden="true" autostart="true" loop="false"/>'
                + '</audio>'
            ).appendTo('body');
        } else  if (timer2 === '0:01') {
            $('<audio class="sound-player" autoplay="autoplay" style="display:none;">'
                + '<source src="snd/rire.mp3" />'
                + '<embed src="snd/rire.mp3" hidden="true" autostart="true" loop="false"/>'
                + '</audio>'
            ).appendTo('body');
        }
    }, 1000);
}