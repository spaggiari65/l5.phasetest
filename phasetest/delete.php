<?php
    require 'connection.php';
    $query = "DELETE FROM tt where id = ".$_GET["id"];
    mysqli_query($connection, $query);
    header("Location: select.php");
?>