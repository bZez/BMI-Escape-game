<?php include ('header.php'); ?>
<div style="z-index:1 ;" class="fixed-top nav2 text-center nav-green pr-1">Les enigmes</div>
<div class="container">
    <div class="row h-100">
        <main class="col-12 my-auto text-center bg-black-opacity">

        </main>
    </div>
</div>
<?php
if (isset($_SESSION['user'])) {
    include ('footer.php');
}
?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/countdown.js"></script>
</body>
</html>
