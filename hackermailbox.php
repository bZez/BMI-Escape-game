<?php
if (isset($_POST['login']) && isset($_POST['password'])) {
    include('php/config.php');
    $login = $_POST['login'];
    $pass = $_POST['password'];
    if ($login !== $good_login && $pass !== $good_pwd) {
        header('location:hackermail.php');
        exit;
    }
} else {
    header('location:hackermail.php');
    exit;
}
include ('header.php');
?>

<div style="z-index:1 ;" class="fixed-top nav2 text-center nav-green pr-1">&nbsp;&nbsp;&nbsp;Boite de réception<span
            class="float-right"><img
                src="img/newmsg.svg"
                width="15"></span></div>

<main class="text-center" style="margin-top: 75px">

</main>
<?php include ('footer.php'); ?>
<script src="js/jquery-3.3.1.min.js"></script>
<script>
function getMail() {
    $.get( "getmail.php", function( data ) {
        $( "main" ).html( data );
    });
}
$(function () {
    getMail();
    setInterval(function () { getMail() }, 10000);
});
</script>
<script src="js/bootstrap.min.js"></script>
<script>
    function getMail() {
        $.get("php/gethackermail.php", function (data) {
            $("main").html(data);
        });
    }

    $(function () {
        getMail();
        setInterval(function () {
            getMail()
        }, 10000);
    });
</script>
</body>
</html>