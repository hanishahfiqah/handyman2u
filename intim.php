<?php
if(isset($_POST["intim"]))
{
 $cons = mysqli_connect("localhost", "root", "", "authentication");
 $query = "INSERT INTO plumbsys(system) VALUES ('".$_POST["intim"]."')";
 $result = mysqli_query($cons, $query);
 echo "Data Inserted Successfully!";
}
?>