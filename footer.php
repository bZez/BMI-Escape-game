<script type="text/javascript" src="js/adapter.min.js"></script>
<script type="text/javascript" src="js/vue.min.js"></script>
<script type="text/javascript" src="js/instascan.min.js"></script>
<script type="text/javascript" src="js/simon.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script>$(document).ready(function(){
        var items = $('.menu-item');
function resizeR() {
    var icons = $('.main-item');
    icons.height(icons.width());
    icons.css('line-height', icons.height() + 'px');
    items.css('line-height',(items.height())+'px');
    $('.menu-item img').width(items.height()/2);
    items.height((window.innerHeight/5)-1);
    $('.wrap ul.wrap-nav').css('margin-left','-'+items.width()/2+'px')
}
resizeR();
        $( window ).resize(function() {
            resizeR();
        });
        $(".button a").click(function(){
            $(".overlay").fadeToggle(200);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
    });
    $('.overlay').on('click', function(){
        $(".overlay").fadeToggle(200);
        $(".button a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });
</script>