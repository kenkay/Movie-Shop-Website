<?php
  include 'header.php';

?>

<h1>Search Page</h1>

<div class="article-contaniner">
<?php
    if (isset($_POST['submit-search'])) {
      $search = mysqli_real_escape_string($conn, $_POST['search']);
      $sql = "SELECT * FROM Dreamz WHERE MovieName LIKE '%$search%' OR Episodes LIKE '%$search%'";
      $result = mysqli_query($conn, $sql);
      $queryResult = mysqli_num_rows($result);

      echo "There are ".$queryResult. " results! <br>";

      if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<a href='article.php?title=".$row['MovieName']."' <div class='article-box'>
              <h3>".$row['MovieName']."</h3>
              <h3>".$row['Episodes']."</h3>
           </div></a>";
        }
      } else {
        echo "There are no results";
      }
    }


 ?>
</div>
