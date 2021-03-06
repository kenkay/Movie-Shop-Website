<?php
    include 'header.php'
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/styles.css" rel="stylesheet" type="text/css">
  <script src="js/jquery-3.3.1.js">
  </script>
  <script src="js/scripts.js">
  </script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link rel="shortcut icon" href="assets/logo.png" />
  <title>Movie Shop</title>
</head>

<body>
  <div class="nav-bar">
    <ul>
      <li> <img src="" height="" width=""> </li>
      <li><a href=""> Movies </a> </li>
      <li><a href=""> Series </a> </li>
      <li><a href=""> About Us </a> </li>
      <li><a href=""> Log In </a> </li>

      <div class="search-container">
        <form action="search.php" method="POST">
          <input type="text" placeholder="Search Query" name="search" required>
          <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </ul>

  </div>

  <div class="banner">
    <h2> A Whole new World of Entertainment <br> Awaits </h2>
    <div class="banner_btn">
      <button class="signup_btn"> Sign Up </button>
    </div>
  </div>

  <div class="main_page">
    <div class="container">

      <div id="grid">
        <div id="slideA">
          <img class="slideAsec" src="assets/slides/A/thor.png" height="500px" width="362px">
          <img class="slideAsec" src="assets/slides/A/MIB.png" height="500px" width="362px">
          <img class="slideAsec" src="assets/slides/A/archer.jpg" height="500px" width="362px">
        </div>
        <script>
          var myIndex = 0;
          carouselA();

          function carouselA() {
            var i;
            var x = document.getElementsByClassName("slideAsec");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
              myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carouselA, 1700); // Change image every 1.7 seconds
          }
        </script>

        <div id="slideB">
          <img class="slideBsec" src="assets/slides/B/aladin.png" height="500px" width="362px">
          <img class="slideBsec" src="assets/slides/B/baby driver.png" height="500px" width="362px">
          <img class="slideBsec" src="assets/slides/B/BLADE_RUNNER.jpg" height="500px" width="362px">
        </div>
        <script>
          var myIndex = 0;
          carouselB();

          function carouselB() {
            var i;
            var x = document.getElementsByClassName("slideBsec");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
              myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carouselB, 1500); // Change image every 1.5 seconds
          }
        </script>
        <div class="slideC">
          <img class="slideCsec" src="assets/slides/C/HARRY_POTTER1.jpg" height="500px" width="362px">
          <img class="slideCsec" src="assets/slides/C/legion.jpg" height="500px" width="362px">
          <img class="slideCsec" src="assets/slides/C/THE_KING_WALKER.jpg" height="500px" width="362px">
        </div>

        <script>
          var myIndex = 0;
          carouselC();

          function carouselC() {
            var i;
            var x = document.getElementsByClassName("slideCsec");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
              myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carouselC, 3000); // Change image every 3 seconds
          }
        </script>
      </div>

    </div>

  </div>
  </div>
  <div class="trailers">
    <div class="showTrailer">
      <iframe width="100%" height="600px" src="https://www.youtube.com/embed/UUkn-enk2RU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>


</html>
