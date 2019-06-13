<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","authentication");
 
	if( isset($_GET['del']) )
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM acchemform WHERE id='$ACchem_id'";
		echo "<meta http-equiv='refresh' content='0;url=home.php'>";
	}
?>