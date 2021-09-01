<?php
	include "connection.php";
	
	$firstname = $_POST ["fname"];
	$lastname = $_POST ["lname"];
	/* echo "<br>";
	echo $firstname; */
	$query = "INSERT INTO latihan3(first_name, last_name) VALUES ('".$firstname."','".$lastname."')";
	$insert = mysqli_query($conn, $query);
	if($insert == true) {
		echo "<br>";
		 echo "<SCRIPT>
		alert('Berhasil Input Data');
		window.location.replace('index.php');
	</SCRIPT>" ;
	} else{
		echo "<br>";
		echo "<SCRIPT>
		alert('Gagal Input Data');
		window.location.replace('index.php');
	</SCRIPT>" ;
	}
?>