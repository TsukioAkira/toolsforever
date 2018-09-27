<?php
include "db/connection.php";
if(isset($_POST["FormPostEdit"])) {
    function updatevoorraad($connect) {
        $productvoorraad = $_POST['Productvoorraad'];
        $productid = $_POST['Productid'];
        $locatie = $_POST['Locatie'];

        $stmt = $connect->prepare("UPDATE voorraadgegevens SET productvoorraad = (?) WHERE productid = (?) AND locatienaam = (?)");

        $stmt->bind_param("sss", $productvoorraad, $productid, $locatie);

        $stmt->execute();
        $stmt->close();
    }

    updatevoorraad($connect);
}
?>
<html>

<head>
    <title>Product Toevoegen</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/flexboxgrid.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<!-- NAVIGATION BAR -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <!-- logo -->
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
        <ul class="navbar-nav">
            <li class="nav-item btn btn-text btn-black">
                <a class="nav-link nav-login" href="loginsession.php">Login</a>
            </li>
        </ul>
    </div>
</nav>

<!-- HEADER WEBSITE -->
<section class="container-fluid test">
    <img class="header-image" src="img/header.png" />
    <div class="header-text">
        <h1 class="text-white">ToolsFor</h1><h1 class="text-orange">Ever</h1>
    </div>
</section>

<!-- Toevoegen van een product. -->
<div class="container-fluid" role="document">
    <!-- Modal content-->
    <div class="card position">
        <div class="card-header">
            <h4 class="card-title center">Product Toevoegen</h4>
        </div>
        <form id="2DB" method="post" class="form-horizontal">
            <div class="card-body flex">

                <div class="form-group col-sm-6">
                    <label for="Productvoorraad" class="col-sm-12 control-label">Nieuwe voorraad</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="Productvoorraad" placeholder="Nieuwe voorraad...">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="Productid" class="col-sm-12 control-label">Product id</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="Productid" placeholder="Product ID...">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="Locatie" class="col-sm-4 control-label">Locatie</label>
                    <div class="col-sm-8">
                        <select name="Locatie" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                            <option> Kies een locatie</option>
                            <option value="Almere">Almere</option>
                            <option value="Rotterdam">Rotterdam</option>
                            <option value="Eindhoven">Eindhoven</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a id="FormPostEdit" name="FormPostEdit" type="submit" class="btn btn-default" href="voorraadsysteem.php">Bewerken</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuleren</button>
            </div>
        </form>
        <!-- /.modal-footer End -->
    </div>
    <!-- /.card-content End -->
</div>
<!-- /.card -->
</body>
</html>