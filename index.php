<?php

    //connection
    $conn = mysqli_connect('localhost','teo','test123','ninja_pizza');

    if(!$conn){
        echo "Connection Error: " . mysqli_connect_error();
    }

    //write query for all pizzas

    $sql = 'SELECT title,ingredients,id FROM pizzas ORDER BY created_at';

    //make query and get result
    $results = mysqli_query($conn,$sql);

    //fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($results,MYSQLI_ASSOC);

    //print_r($pizzas);

    //free result from memory
    mysqli_free_result($results);

    //close connection
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php') ?>

    <h4>PIZZAS!</h4>

    <section>

    <?php 
    
    foreach($pizzas as $pizza){
        echo htmlspecialchars($pizza['title'])." <br>";
        echo htmlspecialchars($pizza['ingredients'])." <br>";
        echo '<br>';
    }

    ?>

    </section>

    <?php include('templates/footer.php') ?>

    </body>
</html>