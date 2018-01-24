<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <title>simple page</title>
  <style>
  .ab {
    width: 100%;
    height: 500px;
    background-color: #666666;
    color: #fff;
    text-align: center;
    padding: 48px 10px;
    font-size: 18px;
  }
  body, html, .main {
    height: 100%;
  }
  .h2{
    width: 100%;
    height: 300px;
    background-color: #666666;
    color: #fff;
    text-align: center;
    padding: 48px 10px;
    font-size: 18px;
  }
</style>
<script type="text/javascript">
  function myFunction() {
    var foc= document.getElementById('icon');
    foc.onclick = function() {
      document.getElementById("demo").scrollIntoView({behavior: "smooth"});
    }
  }
  window.onload = function() {
   myFunction();
 }
 //  function myFunction() {
// var foc= document.getElementById('icon');
//  foc.onclick = function() {
//  document.getElementById("demo");

// }
// }
// window.onload = function() {
//    myFunction();
//  }
</script>
</head>
<body>
 <div class="ab">
  <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
    Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
    Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
  </p>
  <p id="icon"><i class="fa fa-angle-double-down" style="font-size:48px;color:red"; ></i></p>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
  Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
  Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
</p><p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
  Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
  Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
</p>
<div class="h2" id="h2">
  <!-- <a href="" id="demo">fhfgh</a> --></div>
  <h1>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
    Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
    Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
  </h1>

  <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
    Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
    Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
  </p>

  <div class="h2" id="h2">
    <h1 id="demo"">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
      Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
      Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
    </h1>
  </div>
  <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
    Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
    Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis…
  </p>
</body>
</html>
