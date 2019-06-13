<?php
if(isset($_POST["into"]))
{
 $con = mysqli_connect("localhost", "root", "", "authentication");
 $query = "INSERT INTO travel(location) VALUES ('".$_POST["into"]."')";
 $result = mysqli_query($con, $query);
 echo "Data Inserted Successfully!";
}
?>
