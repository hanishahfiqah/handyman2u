<?php
if(isset($_POST["inthis"]))
{
 $conti = mysqli_connect("localhost", "root", "", "authentication");
 $query = "INSERT INTO plumbingprobs(plumbproblem) VALUES ('".$_POST["inthis"]."')";
 $result = mysqli_query($conti, $query);
 echo "Data Inserted Successfully!";
}
?>
