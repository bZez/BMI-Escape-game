<?php include('header.php'); ?>
<div style="z-index:1 ;" class="fixed-top nav2 text-center nav-green pr-1">Accueil</div>
<div class="container-fluid" style="padding-top: 15vh;">
    <div class="row h-100">
        <main class="col-12 my-auto text-center bg-black-opacity">

            <?php if (!isset($_SESSION['user'])) { ?>
                <h1 class="green timer" id="timerbig">
                    <div class="countdown text-center pr-4">45:00</div>
                </h1>
                <div id="form">
                    <input name="user_email" type="email"
                           class="add col-12 form-control input-black border-green rounded text-center green"
                           id="adresse" placeholder="Adresse mail..."
                           required>
                    <select name="participants" class="particiants rounded mt-3 input-black border-green">
                        <option class="input-black" value="1">1 personne</option>
                        <option class="input-black" value="2">2 personnes</option>
                        <option class="input-black" value="3">3 personnes</option>
                        <option class="input-black" value="4">5 personnes</option>
                        <option class="input-black" value="5">5 personnes MAX</option>
                    </select>
<hr>
                    <input type="submit" value="Démarrer !"
                           class="black btn rounded font-weight-bold border-green bg-green mt-3"
                           id="send">
                </div>
            <?php } else {
                include 'php/config.php';
                include('php/countdown.php');
                echo '<script src="js/countdown.js"></script><script>' . $countdown . '</script>';
                ?>
                <div class="container-fluid mt-3 p-0">
                    <?php
                    for ($i = 1; $i < 21; $i++) { ?>
                        <div class="modal fade" id="enigme<?php echo $i ?>">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content bg-danger black text-center">
                                    <!-- Modal Header -->
                                    <div class="modal-header border-bottom-0">
                                        <h4 class="modal-title">Titre N°<?php echo $i ?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <h1>INFOS</h1>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer border-top-0 text-left">
                                        <button hidden data-dismiss="modal" id="close"></button>
                                    </div>

                                </div>
                            </div>
                        </div> <?php
                            echo '<button data-toggle="modal" data-target="#enigme'.$i.'" class="col-1 d-inline-block rounded border-0 p-4 ml-1 mb-2 main-item"></button>';
                    }
                    ?>
                </div> <?php
            } ?>

        </main>
    </div>
</div>
<?php
if (isset($_SESSION['user'])) {
    include('footer.php');
}
?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/countdown.js"></script>
<script>

    $("#send").click(function () {
        var adresse = $(".add").val();
        var participants = $("select[name='participants']").val();

        var arobase = '@', point = '.';

        if (adresse != '') {
            if (adresse.indexOf(arobase) !== -1 && adresse.indexOf(point) !== -1) {
                $.post("php/setuser.php", {
                        user_mail: adresse,
                        participants: participants
                    },
                    function (data) {
                        $('#form').remove();
                        countdown();
                        $('#timerbig').remove();
                        location.reload();
                    });
            } else {
                alert('Adresse email non valide...');
            }
        } else {
            alert('Vous devez entrez une adresse mail...');
        }
    });
</script>
</body>
</html>
