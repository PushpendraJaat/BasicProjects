<?php 

include "functions.php";
include "adddata.php";
?>

<!DOCTYPE html>

<html>
<head>

        <title>Data Entry Task</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/maincss.css">
        
        

    </head>

<body>

<h2>Data Entry Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" name="firstname">

    <br>

    Last name:<br>

    <input type="text" name="lastname">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Password:<br>

    <input type="password" name="password">

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br>
    
    Fav Food:<br>

    <input type="checkbox" name="favfood[]" value="Pizza">Pizza

    <input type="checkbox" name="favfood[]" value="Burger">Burger

    <input type="checkbox" name="favfood[]" value="Noodles">Noodles

    <br>

    <input class="btn btn-info" type="submit" name="submit" value="submit">
    <a class="btn btn-info" href="view.php">View Data Table</a>

  </fieldset>

</form>

</body>

</html>