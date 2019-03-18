<?php 

    if(isset($_POST['submit'])){
        //echo htmlspecialchars($_POST['title']." ");
        //echo htmlspecialchars($_POST['ingredients']." ");
    }

    if(empty($_POST['email'])){
        echo "An email is required <br>";
    }
    else
    {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email must be a valid email address';
        }
    }

    if(empty($_POST['title'])){
        echo "A Title is required <br>";
    }
    else
    {
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
            echo 'Title must be letters and spaces only';
        }
    }

    if(empty($_POST['ingredients'])){
        echo "Ingredients are required <br>";
    }
    else
    {
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$title)){
            echo 'Ingredients must be comma seperated letters and spaces only';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php') ?>

    <section>
    <h4>Form</h4>
    <form action="add.php" method="POST">
        <label for="email">Email Address:</label>
        <input type="text" name="email">
        <label for="title">Pizza Title:</label>
        <input type="text" name="title">
        <label for="ingredients">Ingredients (Comma seperated):</label>
        <input type="text" name="ingredients">
        <input type="submit" name="submit" value="submit">
    </form>
    </section>

    <?php include('templates/footer.php') ?>

    </body>
</html>