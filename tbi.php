<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Escape game</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/typed.min.js" type="text/javascript"></script>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<style>
  @import url('https://fonts.googleapis.com/css?family=Slabo+27px');
  *{
    padding:0;
    margin:0;
    box-sizing: border-box;
  }
  html, body {
    height:100%;
    font-size: 100%;
    background: url("img/matric.gif");
      background-size: cover;
    overflow: hidden;
      user-select: none;
      -moz-user-select: -moz-none;
  }
  article{
    color: rgba(0,204,17,0.9);
    font-family: 'Slabo 27px', serif;
    font-size: 18px;
    padding: 0 0 0 25%;
    max-height:90%;
    width:100%;
    white-space:pre;
    overflow: hidden;
      background-color: rgba(0,0,0,.8);
  }
  .lettre{
    text-decoration: underline;
  }
  footer{
    width: 100%;
    height: 10%;
    position: fixed;
    bottom: 0;
    background-color: limegreen;
      box-shadow: 0px 0 20px limegreen;
      animation: interference 4s infinite;
  }
    .full {
        position:absolute;
        top:0;
        left:0;
        width: 100%;
        height: 100%;
        background: url("img/matric.gif");
        background-size: cover;
        text-align: center;
        line-height: 100vh;

    }
    .full img {
        box-shadow: 0px 0 100px limegreen;
        border-radius:10px ;
        background-color: rgba(0,0,0,.5);
        animation: interference 5s infinite;
    }
    .letter {
        background-color: black;
        box-shadow: 0 0 15px 0 limegreen inset;
        color: limegreen;
        animation: interference 4s infinite;
    }
  @keyframes interference {
      0% {
          transform: skewX(0)
      }

      31% {
          transform: skewX(-2deg)
      }

      31.5% {
          transform: skewX(89deg)
      }

      32% {
          transform: skewX(89deg)
      }

      32.1% {
          transform: skewX(0)
      }

      33% {
          transform: skewX(2deg)
      }

      54% {
          transform: skewX(0deg)
      }

      94% {

          transform: skewX(2deg)
      }

      95.1% {
          transform: skewX(-3deg)
      }

      95.2% {
          transform: skewX(-89deg)
      }

      95.3% {
          transform: skewX(2deg)
      }

      100% {
          transform: skewX(0)
      }
  }

</style>

<body>

<article id="typed"></article>

<footer>
    <div class="container">
        <div class="float-left"><img src="tbi/clickarrow.png" width="100"></div>
  <div class="word row pt-4">
  </div>
    </div>

</footer>
<script src="js/discoword.js"></script>
<?php
include ('php/config.php');
$discoword = '"'.$discoword.'"';
echo '<script>discoword('.$discoword.')</script>';
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var typed = new Typed('#typed', {
            strings: ['&lt;!DOCTYPE html&gt;\n' +
            '&lt;html lang="fr"&gt;\n' +
            '&lt;head&gt;\n' +
            '    &lt;meta charset="UTF-8"&gt;\n' +
            '    &lt;title&gt;Le hac<span class="lettre">k</span>eur de la BMI&lt;/title&gt;\n' +
            '&lt;/head&gt;\n' +
            '&lt;body&gt;\n' +
            '    &lt;header id="header" role="banner"&gt;\n' +
            '        &lt;nav id="navigation" role="navigation"&gt;\n' +
            '            &lt;ul class="liste"&gt;\n' +
            '                &lt;li class="elementListe"&gt;La BM<span class="lettre">I</span> et ses deux relais ont en fait été victimes de cyberattaque&lt;/li&gt;\n' +
            '                &lt;li class="elementListe"&gt;Cyberattaque à la BMI : tout est rentré dans l’ordre&lt;/li&gt;\n' +
            '            &lt;/ul&gt;\n' +
            '        &lt;/nav&gt;\n' +
            '    &lt;/<span class="lettre">h</span>eader&gt;\n' +
            '    &lt;main id="main" role="main" class="flex-item-fluid pam"&gt;\n' +
            '        &lt;h1&gt;La BMI ne peut momentanément pas procéder à des prêts de docume<span class="lettre">n</span>ts suite à une cyberattaque...&lt;/h1&gt;\n' +
            '        &lt;p&gt;\n' +
            '            Le résultat d’une cyberattaque dont a été victime le réseau informatique de l’établissement culturel dans la nuit de jeudi à vendredi.&lt;br&gt;\n' +
            '            <span class="lettre">A</span>vec « rançonning », c’est-à-dire d’une demande de rançon de la part des cyberpirates.&lt;br&gt;\n' +
            '        &lt;/p&gt;\n' +
            '        &lt;p&gt;\n' +
            '            Mobilisés toute la nuit de cette attaque, les informaticiens (les gentils, pas les méchants) avaient cru avoir solutionné l’affaire vendredi matin.&lt;br&gt;\n' +
            '            Mais le virus était plus coriace qu’on aurait pu le <span class="lettre">c</span>roire.&lt;br&gt;\n' +
            '            Ils promettent que tout sera rentré dans l’ordre jeudi soir et que les « otages » (les données informatiques) auront été libérés.&lt;br&gt;\n' +
            '            Sans qu’aucune rançon eût été versée bien sûr!\n' +
            '        &lt;/p&gt;\n' +
            '    &lt;/main&gt;\n' +
            '    &lt;footer id="footer" role="Contentinfo" class="pam"&gt;&lt;ul class="pam"&gt;\n' +
            '        Les responsables de la communauté d’Ag<span class="lettre">g</span>lo d’Épinal et les personnels de la BMI saluent en attendant l’attitude des usagers qui se montrent compréhensifs.\n' +
            '    &lt;/footer&gt;\n' +
            '&lt;/body&gt;\n' +
            '&lt;/html&gt;' +
            ''],

            typeSpeed: 5,
            backSpeed: 0,
            fadeOut: true,
            loop: true
        });
    });
</script>

<script>
    $(document).ready(function(){
        $(this).bind("contextmenu",function(e){
            return false;
        });
        positionScroll();
    });

    function positionScroll(){
        var hauteurCode = document.getElementById('typed').scrollHeight;
            document.getElementById('typed').scrollTo(0,hauteurCode);
          setTimeout(positionScroll, 100);
    }
</script>

</body>
</html>