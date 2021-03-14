<?php    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $name = "topper";

    $connection = mysqli_connect($servername, $username, $password, $name);

    /*  can be directly used in place of above 
    $connection = new mysqli('localhost', 'root', '', 'topper');
    */

    if($connection -> connect_errno){
        echo "Failed connecting database." .$connection -> connect_errno;
        exit();
    } else {
        echo "We are connected to the database.";
    }

    //inserting the data manually in phpmyadmin database
   /* 
    include 'connection.php';        //required for connecting the database

    $data_entry = "INSERT INTO topper ('ID', 'Username', 'Password', 'DOB', 'Gender', 'Country') 
    Values (007, 'AB de Villiers', 'proteas.squad', '1984-02-17', 'Male', 'South Africa')";

    mysqli_query($connection, $query);
    */

?>