<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="stylesheet.css" type="text/css"> 
</head>


<?php
    require 'connection.php';
    $id;
    if(isset($_GET['ID']))
{
    $query = "SELECT * FROM tt WHERE id =". $id;
    $data=mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($data);
}

?>

<body>

<table border = "1">
    <h1>Input your details</h1>

    <form action="submit.php" method = "POST">

        <label for="uname">Username: </label>
        <input type="uname" name="Username" value="<?php if(isset($ID)) echo $row["Username"]?>">
        <br/><br>

        <label for="password" >Password: </label>
        <input type="password" name="Password"  value="<?php echo $row["Password"]?>">
        <br/> <br>

        <label for="dob"> Date of Birth: </label>
        <input type="text" name = "DOB"  value="<?php echo $row["DOB"]?>">
        <br/> <br>

        <label for="gender"> Gender:  </label>
        <ul>
        <input type="radio" id="male" name="Gender" value="male" >
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="Gender" value="female"> 
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="Gender" value="other"> 
        <label for="other">Other</label>
        </ul>

        <br> <br>   
        <label for="country"> Country: </label>
        <input type="country" name="Country"  value="<?php echo $row["Country"]?>">

        <!-- <select name="province" name="Country">
        <option value="Nepal"> Nepal </option>
        <option value="United States of America"> United States of America </option>
        <option value="France"> France </option>
        <option value="India"> India </option>
        <option value="UAE"> UAE </option>
        <option value="Canada"> Canada </option>
        <option value="Germany"> Germany </option>
        <option value="China"> China </option>
        <option value="Japan"> Japan </option>
        <option value="Luxemburg"> Luxemburg </option>
        <option value="South Africa"> South Africa </option>
        </select>-->
        <br><br>

        <input type="checkbox"> I declare all the above informations are correct and best of my knowlege. </br>
        I will be liable for the any false information presented here.
        </br></br>
        <input type="submit"> 
    </form>
    </table>
</body>
</html>