<?php
include('config.php');
$req = ('SELECT * FROM messages');
$mail = "".$_SESSION["user"]."";
$req_perso = ("SELECT * FROM messages_perso WHERE email = '$mail'");
$result = $con->query($req);
$result2 = $con->query($req_perso);
$i = 0;
while ($msg = $result2->fetch_assoc()) {
    ?>
    <div class="mailrow p-3 bg-black-opacity">
        <a data-toggle="modal" data-target="#modalMail_<?php echo $i ?>">
            <div class="row">
                <div class="col-xs-1 col-1"><img src="img/mails.png" width="20"></div>
                <div class=" col-9 text-left green"><b><?php echo $msg['title'] ?></b><br>
                    <div class="msgText">
                        <small><?php echo $msg['content'] ?></small>
                    </div>
                </div>
                <small class="col-xs-1 col-1 font-weight-bold text-danger float-right text-right"></small>
            </div>
        </a>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="modalMail_<?php echo $i ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-green border-green black text-center">

                <!-- Modal Header -->
                <div class="modal-header border-bottom-0">
                    <h4 class="modal-title"><?php echo $msg['title'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body m-auto">
                    <?php echo $msg['content'] ?>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer border-top-0 text-left">
                    <button type="button" class="btn btn-black " data-dismiss="modal">Fermer</button>
                </div>

            </div>
        </div>
    </div>
    <?php
    $i++;
}
while ($msg = $result->fetch_assoc()) {
    ?>
    <script>
        $('.mailrow').click(function () {
            $(this).find('a')[0].click();
        });
    </script>
    <div class="mailrow p-3 bg-black-opacity">

            <div class="row">
                <div class="col-xs-1 col-1">
                    <img src="img/mails.png" width="20"></div>
                <div class=" col-9 text-left green"><b><?php echo $msg['title'] ?></b>

                    <a data-toggle="modal" data-target="#modalMail_<?php echo $i ?>">
                    <div class="msgText">
                        <small><?php echo $msg['content'] ?></small>
                    </div>
                    </a>
                </div>
                <small class="col-xs-1 col-1 font-weight-bold text-danger float-right text-right"></small>
            </div>

    </div>
    <!-- The Modal -->
    <div class="modal fade" id="modalMail_<?php echo $i ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-green border-green black text-center">

                <!-- Modal Header -->
                <div class="modal-header border-bottom-0">
                    <h4 class="modal-title"><?php echo $msg['title'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body m-auto">
                    <?php echo $msg['content'] ?>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer border-top-0 text-left">
                    <button type="button" class="btn btn-black " data-dismiss="modal">Fermer</button>
                </div>

            </div>
        </div>
    </div>
    <?php
    $i++;
}
?>