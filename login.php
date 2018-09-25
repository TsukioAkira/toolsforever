<?php
   if(isset($_POST['logging'])) {
	   $server = 'localhost';
	   $username = 'root';
	   $password = '';
	   $database = 'toolsforever';


	   $connect = mysqli_connect($server, $username, $password, $database);
	   
	   if ($connect->connect_error) {
		   die('connection failed');
	   } else 
		   //echo 'succesfull';
	   
	   $medewerkeremail= $_POST["username"];
	   $medewerkerwachtwoord= $_POST["password"];
	   
	   
	   $sql = "SELECT medewerkernaam FROM medewerker WHERE medewerkeremail='$medewerkeremail' AND medewerkerwachtwoord='$medewerkerwachtwoord'";
	   
	   $result = $connect->query($sql);
	   
	   if($result -> num_rows > 0){
		   
		   while ($row=$result -> fetch_assoc()){
			   //echo "<br> Welkom " . $row["medewerkernaam"];
			   header('Location: #success');
			   
			   //code for redirection here
		   }
	   } else {
		   echo "<br> Gebruikersnaam of Wachtwoord is verkeerd ingevuld!";
	   }
   }
?>