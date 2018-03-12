<?php include('header.php'); ?>
<body class="text-white">
<!-- The Modal -->
<div class="modal fade" id="modalPassword">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-green border-green black text-center">

            <!-- Modal Header -->
            <div class="modal-header border-bottom-0">
                <h4 class="modal-title">À vous de jouer </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body m-auto">
                <h6>"La réponse change toute les minutes..."</h6><br>
              <input id="time1" type="text" class="time input-black shadow-black border-0 rounded text-center col-2 pt-3 pb-3" placeholder="X" maxlength="1" required>
              <input id="time2" type="text" class="time input-black shadow-black border-0 rounded text-center col-2 pt-3 pb-3" placeholder="X" maxlength="1" required>
              <input id="time3" type="text" class="time input-black shadow-black border-0 rounded text-center col-2 pt-3 pb-3" placeholder="X" maxlength="1" required>
              <input id="time4" type="text" class="time input-black shadow-black border-0 rounded text-center col-2 pt-3 pb-3" placeholder="X" maxlength="1" required>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer border-top-0 text-left">
                <button type="button" class="btn btn-black " data-dismiss="modal">Fermer</button>
            </div>

        </div>
    </div>
</div>
<div class="container" id="main">
    <div class="row h-100">
        <main class="col-sm-12 my-auto text-center">
           <div class="row">
               <div class="col-2"></div>
               <div class="col-8 bg-black-opacity border-green rounded pb-3" style="height: 63vh!important;">
                   <img src="img/Anonymous_emblem.svg.png" width="180" class="p-4" alt="">

                <form method="post" action="hackermailbox.php">
                    <input required name="login" type="text" class="input-black border-green text-center col-10 rounded" placeholder="Identifiant..." readonly
                           onfocus="this.removeAttribute('readonly');">
                    <input required name="password" type="password" class="input-black border-green text-center col-10 rounded mt-1" placeholder="Mot de passe..." readonly
                           onfocus="this.removeAttribute('readonly');">
                    <input class="bg-green black mt-3 border-green rounded" type="submit" value="connexion">
                    <br><small><a class="text-danger"  data-toggle="modal" data-target="#modalPassword">Mot de passe oublié</a></small>
                </form>
               </div>
               <div class="col-2"></div>
           </div>
        </main>
    </div>
</div>
<?php include('footer.php') ?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(function () {
    $('a.text-danger').click(function () {
        $('a.text-danger')[0].click();
    });
    var dt = new Date();
    var heures = dt.getHours();
    var minutes = dt.getMinutes();
    if(minutes<10) {
        minutes = '0'+minutes;
    }
    if(heures<10) {
        heures = '0'+heures;
    }
    var time = heures +''+ minutes;
    $('.time').change(function(){
        var time1 = $('#time1').val();
        var time2 = $('#time2').val();
        var time3 = $('#time3').val();
        var time4 = $('#time4').val();
        var code = time1+time2+time3+time4;
        if(code === time) {
            $('.modal-body').html('<h3>Le mot de passe est:</h3><h1>$2rWsvC!</h1>');
        }
    });
});
</script>
</body>
</html>
