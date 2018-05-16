 <?php
    include("config.php");
    session_start();
          if(isset($_POST["charName"])){
          $sql = "SELECT * FROM characters WHERE charName = '" . $_POST["charName"] . "'";
          $result = mysqli_query($conn, $sql);

          if(mysqli_num_rows($result) > 0){
            echo "<p class='error'> UNAVAILABLE </p>";
          } else {
            echo "<p class='error' style='color: green;'> AVAILABLE </p>";
        }} ?> 