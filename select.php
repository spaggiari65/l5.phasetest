<?php
    require 'connection.php';

    $query ="SELECT * FROM tt";
    $data = mysqli_query($connection, $query);
    //$row = mysqli_fetch_assoc($data);

?>
<table border = '1'>
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Country</th>

<?php 
    while($row = mysqli_fetch_assoc($data))
    {
?>   
<tr>
<td><?php echo $row["ID"]?></td>
<td><?php echo $row["Username"]?></td>
<td><?php echo $row["Password"]?></td>
<td><?php echo $row["DOB"]?></td>
<td><?php echo $row["Gender"]?></td>
<td><?php echo $row["Country"]?></td>
<td><a href="form.php?id=<?php echo $row["ID"] ?>"> Update </a>
<a href="delete.php?id=<?php echo $row["ID"] ?>"> Delete </a></td>

</tr>
<?php
    }
?>
</table>