<?php include ('header.php'); ?>
<div style="z-index:1 ;" class="fixed-top nav2 text-center nav-green pr-1">&nbsp;&nbsp;&nbsp;Boite de réception<span
            class="float-right"><img
                src="img/newmsg.svg"
                width="15"></span></div>
<main class="text-center" style="margin-top: 10vh">

</main>

<?php include('footer.php'); ?>
<script src="js/countdown.js"></script>
<script>
    function getMail() {
        $.get("php/getmail.php", function (data) {
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
<script src="js/bootstrap.min.js"></script>
</body>
</html>