<?php 

    if(isset($_POST['submit'])){
        echo htmlspecialchars($_POST['email']." ");
        echo htmlspecialchars($_POST['title']." ");
        echo htmlspecialchars($_POST['ingredients']." ");
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