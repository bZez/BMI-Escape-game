<?php
include('header.php');
?>
<div style="z-index:1 ;" class="fixed-top nav2 text-center nav-green pr-1">À vous de jouer !</div>
<div class="container" id="main">
    <div class="row h-100">
        <main class="col-sm-12 my-auto text-center">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 bg-black-opacity border-green rounded pb-3" style="height: 63vh!important;">
                    <section class="">
                        <h2>Quelle suite de chiffre est égal à 64:</h2>
                        <input id="a" type="checkbox"><label for="a">+64</label>
                        <input id="b" type="checkbox"><label for="b">+16</label>
                        <input id="c" type="checkbox"><label for="c">-32</label>
                        <input id="d" type="checkbox"><label for="d">+128</label>
                        <input id="e" type="checkbox"><label for="e">+4</label>
                        <input id="f" type="checkbox"><label for="f">-8</label>
                        <br>
                        <div class="sum"></div>
                    </section>

                </div>
                <div class="col-2"></div>
            </div>
        </main>
    </div>
</div>

  
<?php include('footer.php'); ?>
</body>

</html>
