function discoword(word) {
    //POISTION
    word_code = '';
    for (var i = 0; i < word.length; i++) {
        word_code += (word.charCodeAt(i)) + ",";
        $('.word').append('<h1 class=" m-auto rounded letter text-center" style="width: ' + ((100 / word.length) - 2) + '%;">A</h1>');
    }
    $('.letter').click(function () {
        letter = $(this).html();
        code = letter.charCodeAt(0);
        A = String.fromCharCode(65);
        next = String.fromCharCode(code + 1);
        if (code >= 90) {
            $(this).html(A);
        } else {
            $(this).html(next);
        }
    });

    function checkCode() {
        check_code = '';
        word_to_check = $('.letter').each(function () {
            check_code += $(this).html().charCodeAt(0) + ',';
        });
        if (check_code === word_code) {
            $('body').html('<div class="full"><img src="tbi/qrcode.png"></div>'
                +'<audio src="snd/tbi.mp3" autoplay preload ></audio>');
            setInterval(function () {
                location.reload();
            }, 15000)
        }
    }

    $('.letter').click(function () {
        checkCode();
    });



    $('.letter').bind('DOMMouseScroll', function (e) {
        letter = $(this).html();
        code = letter.charCodeAt(0);
        A = String.fromCharCode(65);
        Z = String.fromCharCode(90);
        next = String.fromCharCode(code + 1);
        prev = String.fromCharCode(code - 1);
        if (e.originalEvent.detail > 0) {
            //scroll down
            if (code >= 90) {
                $(this).html(A);
            } else {
                $(this).html(next);
            }
            checkCode();
        } else {
            //scroll up
            if (code <= 65) {
                $(this).html(Z);
            } else {
                $(this).html(prev);
            }
            checkCode();
        }
        //prevent page fom scrolling
        return false;
    });

    /*        //IE, Opera, Safari
            $(this).bind('mousewheel', function (e) {
                if (e.originalEvent.wheelDelta < 0) {
                    //scroll down
                    alert('Down');
                } else {
                    //scroll up
                    alert('Up');
                }
                //prevent page fom scrolling
                return false;
            });*/

}