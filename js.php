<!DOCTYPE html>
<html>
<head>
<title>js</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<style>
.body{
  height:800px;
  margin:5px auto;
  width:100%;
  text-align:center;
  font-size:1.3em;
}

.gototop2{
  width:99%;
  background:#000;
  border:2px solid grey;
}

.goto-top{
   margin-left:-100%;
   position:fixed;
   bottom:20px;
   right:50px;
 }

p{
  color:blue;
}
p:hover{
  cursor:pointer;
}
#goto-topJS{
  margin-left:1%;
  position:fixed;
  bottom:20px;
  left:50px;
}
</style>
<script>$(document).ready(function () {
  $(window).scroll(function () {
    var top =  $(".goto-top");
        if ( $('body').height() <= (    $(window).height() + $(window).scrollTop() + 200 )) {
  top.animate({"margin-left": "0px"},1500);
        } else {
            top.animate({"margin-left": "-100%"},1500);
        }
    });

    $(".goto-top").on('click', function () {
        $("html, body").animate({scrollTop: 0}, 400);
    });
});

// vanilla JS
var toTop = document.getElementById("goto-topJS");

  toTop.addEventListener("click", function(){
  scrollToTop(4000);
});
function scrollToTop(scrollDuration) {
    var scrollStep = -window.scrollY / (scrollDuration / 15),
        scrollInterval = setInterval(function(){
        if ( window.scrollY != 0 ) {
            window.scrollBy( 0, scrollStep );
        }
        else clearInterval(scrollInterval);
    },15);
}
</script>
</head>
<body>
<div class="body">Scroll down the page and return to top with either JS or jQuery</div>

<div class="goto-top2">
  <p class="goto-top">Go to top with jQuery <img src="http://i1155.photobucket.com/albums/p559/scrolltotop/arrow66.png" width="20" height="20"></p>
  <p id="goto-topJS">Go to top with vanilla JS <img src="http://i1155.photobucket.com/albums/p559/scrolltotop/arrow66.png" width="20" height="20"></p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 </div>
</body>
</html.
