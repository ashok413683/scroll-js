<script>
$(document).ready(function(){
  $("#btn").click(function(){
    $("#box").animate({
      width: "300px"
    }, {
      duration: 5000,
      easing: "linear",
      step: function(x) {
        $("#demo").text(Math.round(x * 100 / 400)  + "%");
      }
    });
  });
});
</script>
