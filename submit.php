<?php

require 'connection.php';

    $query = "INSERT INTO tt
    (
        `Username`, 
        `Password`, 
        `DOB`, 
        `Gender`, 
        `Country`
        ) 
    VALUES 
    (
        '".$_POST["Username"]."', 
        '".$_POST["Password"]."', 
        '".$_POST["DOB"]."', 
        '".$_POST["Gender"]."', 
        '".$_POST["Country"]."'
        );";
   
    mysqli_query($connection, $query);
    header("Location: select.php");
?>