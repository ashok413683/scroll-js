 function myFunction() {
    var foc= document.getElementById('icon');
    foc.onclick = function() {
      document.getElementById("demo").scrollIntoView({behavior: "smooth"});
    }
  }
  window.onload = function() {
   myFunction();
 }
