<html>

<head>
    <title>Home Pagina</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/defaultLayout.css">
    <link rel="stylesheet" type="text/css" href="css/buttonStyling.css">
    <link rel="stylesheet" type="text/css" href="css/flexboxgrid.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- logo -->
    <a class="navbar-brand" href="index.php">
        <img src="img/icon.png" alt="logo" class="logo">
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
        <li class="nav-item btn btn-black">
            <a class="nav-link" href="loginsession.php">Login</a>
        </li>
    </ul>-->
</nav>

<!-- HEADER WEBSITE -->
<section class="container-fluid test">
    <img class="header-image" src="img/header.png" />
    <div class="header-text">
        <h1 class="text-white">ToolsFor</h1><h1 class="text-orange">Ever</h1>
    </div>
</section>

<!-- CONTENT WEBSITE-->
<section class="container-fluid">
    <div class="card position">
        <div class="card-body">
            <?php
                include "db/connection.php";

                $sql = "SELECT productid, productnaam, productomschrijving, productprijs, fabrieknaam FROM product";
                $result = $connect->query($sql);

                if ($result -> num_rows > 0) {
                    echo '
                            ';
                    while($row = $result->fetch_assoc()) {
                        /*echo "ProductID: " . $row["productid"] .
                            " - Product Naam: " . $row["productnaam"] .
                            " - Product Omschrijving " . $row["productomschrijving"] .
                            " - Product Prijs " . $row["productprijs"] .
                            " - Fabriek Naam" . $row["fabrieknaam"] . "<br />";*/

                        echo '
                                <table class="table table-striped table-dark">
                                  <thead>
                                    <tr>
                                      <th scope="col">ProducID</th>
                                      <th scope="col">Naam</th>
                                      <th scope="col">Omschrijving</th>
                                      <th scope="col">Prijs</th>
                                      <th scope="col">Fabriek</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">' . $row["productid"] . '</th>
                                      <td>' . $row["productnaam"] . '</td>
                                      <td>' . $row["productomschrijving"] . '</td>
                                      <td>' . $row["productprijs"] . '</td>
                                    </tr>
                                  </tbody>
                                </table>';
                    }
                } else {
                    echo "Geen resultaat gevonden, misschien is er iets mis gegaan.";
                }
                $connect->close();
            ?>
        </div>
    </div>
</section>
</body>
</html>