<?php
  include 'header.php';

?>

<h1> Article Page </h1>

<div class="article-contaniner">
  <?php
      $title = mysqli_real_escape_string($conn, $_GET['title']);

      $sql = "SELECT * FROM DreamzS WHERE MovieName ='$title'";
      $result = mysqli_query($conn, $sql);
      $queryResults = mysqli_num_rows($result);

      if ($queryResults > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='article-box'>
                <h3>".$row['MovieName']."</h3>
                <h3>".$row['Rating']."</h3>
             </div>";
          }
      }
   ?>

   <?php
       $title = mysqli_real_escape_string($conn, $_GET['title']);

       $sql = "SELECT * FROM Dreamz WHERE MovieName ='$title'";
       $result = mysqli_query($conn, $sql);
       $queryResults = mysqli_num_rows($result);

       if ($queryResults > 0) {
           while($row = mysqli_fetch_assoc($result)) {
             echo "<div class='article-box'>
                 <h3>".$row['MovieName']."</h3>
                 <h3>".$row['Episodes']."</h3>
              </div>";
           }
       }
    ?>

</body>

</html>
