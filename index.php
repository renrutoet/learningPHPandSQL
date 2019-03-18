<?php

    //connection
    $conn = mysqli_connect('localhost','teo','test123','ninja_pizza');

    if(!$conn){
        echo "Connection Error: " . mysqli_connect_error();
    }

?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php') ?>

    <?php include('templates/footer.php') ?>

    </body>
</html>