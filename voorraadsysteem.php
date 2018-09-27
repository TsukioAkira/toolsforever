<?php
	function dataTable() {
	include "db/connection.php";
	
		//$sql = "SELECT product.productid, product.productnaam, product.productomschrijving, product.productprijs, product.fabrieknaam FROM product INNER JOIN voorraadgegevens ON product.productid = voorraadgegevens.productid";
		$sql = "SELECT product.*, vr.* FROM product INNER JOIN voorraadgegevens vr ON product.productid = vr.productid";
		$result = $connect->query($sql);
		
		if ($result -> num_rows > 0) {
			echo ' 
			<table class="table table-striped table-dark">
				<thead>
					<tr>
						<th scope="col">ProductID</th>
						<th scope="col">Naam</th>
						<th scope="col">Omschrijving</th>
						<th scope="col">Prijs</th>
						<th scope="col">Voorraad</th>
						<th scope="col">Fabriek</th>
						<th scope="col">Locatie</th>
					</tr>
				</thead>
				<tbody>';
			while($row = $result->fetch_assoc()) {
				/*echo "ProductID: " . $row["productid"] .
					" - Product Naam: " . $row["productnaam"] .
					" - Product Omschrijving " . $row["productomschrijving"] .
					" - Product Prijs " . $row["productprijs"] .
					" - Fabriek Naam" . $row["fabrieknaam"] . "<br />";*/
				//var_dump ($row);
				echo '
					<tr>
						<th scope="row" id="' . $row["productid"] . '">' . $row["productid"] . '</th>
						<td scope="row">' . $row["productnaam"] . '</td>
						<td scope="row">' . $row["productomschrijving"] . '</td>
						<td scope="row">' . $row["productprijs"] . '</td>
						<td scope="row">' . $row["productvoorraad"] . '</td>
						<td scope="row">' . $row["fabrieknaam"] . '</td>
						<td scope="row">' . $row["locatienaam"] . '</td>
						<td scope="row">
						    <a class="btn btn-black" type="button" id="' . $row["productid"] . '">
						        <img class="icon" src="img/delete.png"> Verwijder
						    </a>
						    <a class="btn btn-black" type="button" id="'. $row["productid"] .'">
						        <img class="icon" src="img/edit.png" /> Bewerk 
                            </a>
						</td>
					</tr>';
			}
			echo '
				</tbody>
			</table>'; 
		} else {
			echo "Geen resultaat gevonden, misschien is er iets mis gegaan.";
		}
		$connect->close();	
	}
?>
<html>

<head>
    <title>Voorraad Pagina ToolsForEver</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/flexboxgrid.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<!-- NAVIGATION BAR -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!-- logo -->
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">
				<img src="img/iconheader.png" alt="logo" class="logo">
			</a>

			<!-- Links -->
			<ul class="navbar-nav mr-auto">

				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>

			</ul>

			<!-- Login Button -->
			<!--<ul class="navbar-nav">
				<li class="nav-item btn btn-text btn-black">
					<a class="nav-link nav-login" href="loginsession.php">Login</a>
				</li>
			</ul>-->
		</div>
	</nav>

	<!-- HEADER WEBSITE -->
	<section class="container-fluid test">
		<img class="header-image" src="img/header.png" />
		<div class="header-text">
			<h1 class="text-white">ToolsFor</h1><h1 class="text-orange">Ever</h1>
		</div>
	</section>

	<!-- CONTENT WEBSITE-->
	<section class="container-fluid position">
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-4 center">
				    <!-- Button opening the modal for adding Members. -->
                    <a id="ToevoegenLidModal" name="ToevoegenLidModal" type="button" class="btn btn-black" href="toevoegen.php">Toevoegen</a>
					<!--<a class="btn btn-black" href="toevoegen.php"> Toevoegen </a>-->
				</div>
				<div class="col-md-4 center">
                    <a id="ToevoegenLidModal" name="ToevoegenLidModal" type="button" class="btn btn-black" href="bewerken.php">Bewerken</a>
				</div>
				<div class="col-md-4 center">
                    <a id="ToevoegenLidModal" name="ToevoegenLidModal" type="button" class="btn btn-black" href="verwijder.php">Verwijkeren</a>
				</div>
			</div>
		</div>
	</div>	
		<?php
			dataTable();
		?>
	</section>
</body>
</html>