<?php
   if(isset($_POST['logging'])) {
	   $server = 'localhost';
	   $username = 'root';
	   $password = '';
	   $database = 'toolsforever';

	   $loginState = true;

	   $connect = mysqli_connect($server, $username, $password, $database);
	   
	   $medewerkeremail= $_POST["username"];
	   $medewerkerwachtwoord= $_POST["password"];
	   
	   
	   $sql = "SELECT medewerkernaam FROM medewerker WHERE medewerkeremail='$medewerkeremail' AND medewerkerwachtwoord='$medewerkerwachtwoord'";
	   
	   $result = $connect->query($sql);
	   
	   if($result -> num_rows > 0){
		   
		   while ($row=$result -> fetch_assoc()){
			   header('Location: welcome.php');
			   $loginState = true;
		   }
	   } else {
		   $loginState = false;
	   }
   }
?>