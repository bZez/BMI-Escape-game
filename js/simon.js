
$(document).ready(function () {

    son = document.createElement("audio");
    erreur = document.createElement("audio");

    son.src = "simon/sound4.mp3";
    son.volume = 1;
    son.autoPlay = false;
    son.preLoad = true;

    erreur.src = "simon/error.mp3";
    erreur.volume = 1;
    erreur.autoPlay = false;
    erreur.preLoad = true;

    musique = new Array();

    $('#rouge').on("click", function (e) {
        son.currentTime = 3;
        son.play();
        musique.push('1');
        $('#rouge').css({fill: "#00f209", transition: "0.2s"});
        setTimeout(function () {
            $('#rouge').css({fill: "black", transition: "1s ease-in-out"});
        }, 300);
        setTimeout(function () {
            son.pause();
            checkSequence();
        }, 300);
    });

    $('#bleu').on("click", function (e) {
        son.currentTime = 3.3;
        son.play();
        musique.push('2');
        $('#bleu').css({fill: "#00f209", transition: "0.2s"});
        setTimeout(function () {
            $('#bleu').css({fill: "black", transition: "1s ease-in-out"});
        }, 300);
        setTimeout(function () {
            son.pause();
            checkSequence();
        }, 300);
    });

    $('#jaune').on("click", function (e) {
        son.currentTime = 3.6;
        son.play();
        musique.push('3');
        $('#jaune').css({fill: "#00f209", transition: "0.2s"});
        setTimeout(function () {
            $('#jaune').css({fill: "black", transition: "1s ease-in-out"});
        }, 500);
        setTimeout(function () {
            son.pause();
            checkSequence();
        }, 300);
    });

    $('#violet').on("click", function (e) {
        son.currentTime = 3.9;
        son.play();
        musique.push('4');
        $('#violet').css({fill: "#00f209", transition: "0.2s"});
        setTimeout(function () {
            $('#violet').css({fill: "black", transition: "1s ease-in-out"});
        }, 300);
        setTimeout(function () {
            son.pause();
            checkSequence();
        }, 400);
    });

    $('#vert').on("click", function (e) {
        son.currentTime = 4.3;
        son.play();
        musique.push('5');
        $('#vert').css({fill: "#00f209", transition: "0.2s"});
        setTimeout(function () {
            $('#vert').css({fill: "black", transition: "1s ease-in-out"});
        }, 300);
        setTimeout(function () {
            son.pause();
            checkSequence();
        }, 300);
    });

});

function checkSequence(erreur) {
    if (musique.length === 5) {
        sequence = musique.toString();
        console.log(sequence);
        if (sequence == '1,2,3,4,5') {
            setTimeout(function () {
                son.currentTime = 1;
                son.play();
                $('#plan').css({backgroundColor: "#00f209", transition: "1s ease-in-out"});
                $('.win').show();

                //AJAX HERE

                $('#vert,#jaune,#bleu,#violet,#rouge').css("display", "none");
                $('#vert,#jaune,#bleu,#violet,#rouge').css({fill: "#00f209", transition: "1s ease-in-out"});
            }, 300);
            musique = [];
        } else {
            $('#vert,#jaune,#bleu,#violet,#rouge').css({fill: "#8b0000", transition: "0.2s"});
            $('#plan').css({backgroundColor: "#8b0000", transition: "0.2s"});
            $('.erreurColor').css({fill: "black", transition: "0.2s"});
            $('#Ligne2').css({stroke: "black", transition: "0.2s"});
            this.erreur.currentTime = 2;
            this.erreur.play();
            setTimeout(function () {
                $('#vert,#jaune,#bleu,#violet,#rouge').css({fill: "black", transition: "1s ease-in-out"});
                $('.erreurColor').css({fill: "#00f209", transition: "1s ease-in-out"});
                $('#plan').css({backgroundColor: "black", transition: "1s ease-in-out"});
                $('#Ligne2').css({stroke: "#00f209", transition: "1s ease-in-out"});
            }, 500);
        }
        ;
        musique = [];
        console.log(musique.length);
    }
};