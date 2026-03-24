<?php
function wrin_logo() {
    echo '<img src="images/wrin-logo.png" alt="Wrin Logo">';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>If, Chapter, match</title>
        <link rel="stylesheet" href="css/styles.css">
   
    </head>
    <body>


<h1><?= wrin_logo(); ?> The Candy Store</h1>
<nav>
    <a href="index.php">Home</a>
    <a href="candy.php">Candy</a> 
    <a href="about.php">Abou</a>
    <a href="contact.php">Contact</a>
</nav>