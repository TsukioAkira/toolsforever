<?php
include "db/connection.php";
if(isset($_POST["FormPostAdd"])) {
    $querySucess = false;
    function remove($connect) {
        //initialize filled in data from the form.
        $productid = $_POST['Productid'];
        $productvoorraad = $_POST['Productvoorraad'];

        //create the query corresponding to the data filled in the form.
        //$stmt = $connect->prepare("DELETE FROM product (productid, productnaam, productomschrijving, productinkoopprijs, productprijs, fabrieknaam) VALUES (?,?,?,?,?,?)");
        $stmt = $connect->prepare("DELETE FROM voorraadgegevens WHERE productid = (?) AND productvoorraad = (?)");
        //bind the parameters of "?" above to the corresponding order shown below.
        $stmt->bind_param("ss", $productid, $productvoorraad);
        //execute the query.
        $stmt->execute();

        //close the stmt service.
        $stmt->close();
    }


    remove($connect);
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
                    <label for="Productid" class="col-sm-12 control-label">Product id</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="Productid" placeholder="Productid...">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="Productvoorraad" class="col-sm-12 control-label">Product voorraad</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="Productvoorraad" placeholder="Productvoorraad...">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="Fabrieknaam" class="col-sm-12 control-label">Fabriek naam</label>
                    <div class="col-sm-8">
                        <!--<input type="text" class="form-control" name="Fabrieknaam" placeholder="Fabrieknaam...">-->
                        <select name="Fabriek" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                            <option> Kies een Fabriek</option>
                            <option value="Worx">Worx</option>
                            <option value="Black & Dekker">Black & Dekker</option>
                            <option value="Einhell">Einhell</option>
                            <option value="Karchen">Karchen</option>
                            <option value="Bosch">Bosch</option>
                            <option value="Sencys">Sencys</option>
                        </select>
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
                <button id="FormPostAdd" name="FormPostAdd" type="submit" class="btn btn-default">Verwijderen</button>
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