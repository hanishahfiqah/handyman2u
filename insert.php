
<?php
if(isset($_POST["insert"]))
{
 $conn = mysqli_connect("localhost", "root", "", "authentication");
 $query = "INSERT INTO checkbox(service) VALUES ('".$_POST["insert"]."')";
 $result = mysqli_query($conn, $query);
 echo "Data Inserted Successfully!";
}
?>