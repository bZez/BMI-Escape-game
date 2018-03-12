<?php
include('header.php');
?>
<div style="z-index:1 ;" class="fixed-top nav2 text-center nav-green pr-1">Audio game</div>
<br>
<main id="audio" class="container pt-5">
    <div class="row col-sm-12 pisteBlock" data-toggle="modal" data-target="#piste1">
        <div class="col-sm-11 pisteAudio">
            <div class="indice text-center mt-2"></div>
        </div>
    </div>
    <div class="row col-sm-12 pisteBlock" data-toggle="modal" data-target="#piste2">
        <div class="col-sm-11 pisteAudio">
            <div class="indice text-center mt-2"></div></div>
    </div>
    <div class="row col-sm-12 pisteBlock" data-toggle="modal" data-target="#piste3">
        <div class="col-sm-11 pisteAudio">
            <div class="indice text-center mt-2"></div></div>
    </div>
    <div class="row col-sm-12 pisteBlock" data-toggle="modal" data-target="#piste4">
        <div class="col-sm-11 pisteAudio">
            <div class="indice text-center mt-2"></div></div>
    </div>
    <div class="row col-sm-12 pisteBlock" data-toggle="modal" data-target="#piste5">
        <div class="col-sm-11 pisteAudio">
            <div class="indice text-center mt-2"></div></div>
    </div>
    <div class="row col-sm-12 pisteBlock" data-toggle="modal" data-target="#piste6">
        <div class="col-sm-11 pisteAudio">
            <div class="indice text-center mt-2"></div>
        </div>
    </div>
</main>

<?php
include('php/config.php');


for ($i = 1; $i < 7; $i++) { ?>
    <div class="modal fade" id="piste<?php echo $i ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-green border-green black text-center">
                <!-- Modal Header -->
                <div class="modal-header border-bottom-0">
                    <h4 class="modal-title">Casque <?php echo $i ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <img class="sound" src="casque/img/200w.gif">
                    <audio src="casque/audio/casque<?php echo $i ?>.mp3" preload="auto"></audio>

                    <input class="m-auto audioRef rounded input-black border-green mb-2 text-center" type="number"
                           name="a"
                           id="val_a" min="0000" max="9999" step="1" value="0">

                    <input id="sol_a" value="<?php echo $solutions[$i][0] ?>" hidden>


                    <input class="m-auto audioRef  rounded input-black border-green mb-2 text-center" type="number"
                           name="b"
                           id="val_b" min="0000" max="9999" step="1" value="0">
                    <input id="sol_b" value="<?php echo $solutions[$i][1] ?>" hidden>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer border-top-0 text-left">
                    <button class="rounded btn-black btn" data-dismiss="modal" id="close">ok</button>
                </div>

            </div>
        </div>
    </div>
    <?php
}

include('footer.php');
?>
<script>
    $(function () {
        $(".indice").hide();
        $('.pisteBlock').click(function () {
            var target = $(this).attr('data-target');
            setInterval(function () {
                $(target).find("audio")[0].play()
            }, 1000);

        });

        $("input").change(function () {

            current_modal = $('.modal:visible');
            current_modal_id =  '#'+current_modal.attr('id');

            val_a = current_modal.find('#val_a').val();
            sol_a = current_modal.find('#sol_a').val();
            val_b = current_modal.find('#val_b').val();
            sol_b = current_modal.find('#sol_b').val();

            current_audio = $('[data-target="'+current_modal_id+'"]');

            if (val_a === sol_a && val_b === sol_b) {
                $(current_modal_id).find("button").trigger('click');
                $(current_modal_id).remove();
                current_audio.find('.indice').show();
                current_audio.addClass('completed');
            }
        });

    });
</script>
</body>
</html>