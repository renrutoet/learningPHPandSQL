<?php 

 //connection
 $conn = mysqli_connect('localhost','teo','test123','ninja_pizza');

 //connection error check
 if(!$conn){
     echo "Connection Error: " . mysqli_connect_error();
 }

 ?>