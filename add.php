<?php 

    $errors = array('email'=>'','title'=>'','ingredients'=>'');
    $email = "";
    $title = "";
    $ingredients = "";

    if(isset($_POST['submit'])){
    

    if(empty($_POST['email'])){
        $errors['email'] = "An email is required <br>";
    }
    else
    {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
           $errors['email'] = 'Email must be a valid email address';

        }
    }

    if(empty($_POST['title'])){
        $errors['title'] = "A Title is required <br>";
    }
    else
    {
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

    if(empty($_POST['ingredients'])){
        $errors['ingredients'] = "Ingredients are required <br>";
    }
    else
    {
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
            $errors['ingredients'] =  'Ingredients must be comma seperated letters and spaces only';
        }
    }

    if(!array_filter($errors)){
        header('location:index.php');
    }
    else {
        echo "errors found";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php') ?>

    <section>
    <h4>Form</h4>
    <form action="add.php" method="POST">
        <div class="input-field">
            <label for="email">Email Address:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>" placeholder="Enter email">
            <div class="error"><?php echo $errors['email']; ?></div>
        </div class="input-field">
        <div>
            <label for="title">Pizza Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>" placeholder="Enter title">
            <div class="error"><?php echo $errors['title']; ?></div>
        <div class="input-field">
        </div>
            <label for="ingredients">Ingredients (Comma seperated):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>" placeholder="Enter ingredients">
            <div class="error"><?php echo $errors['ingredients']; ?></div>
        </div>
        <div class="input-field">
           <input type="submit" name="submit" value="submit" class="button">
        </div>
    </form>
    </section>

    <?php include('templates/footer.php') ?>

    </body>
</html>