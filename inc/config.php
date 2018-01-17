<?php 
   
   $conn = mysqli_connect("localhost", "root", "", "aftermath");
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }

?>