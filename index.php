<?php

    define('GENDER',"Male");

    $name = 'Teo';
    $age = 26;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My first PHP</title>
</head>
<body>
    <h1>About Me</h1>

    <div><?php echo $name ?></div>
    <div><?php echo $age ?></div>
    <div><?php echo GENDER?></div>

</body>
</html>