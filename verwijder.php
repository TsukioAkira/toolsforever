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

    <!-- Verwijderen van een product. -->
    <div id="ModalAdd" role="dialog">
        <div class="container-fluid" role="document">
            <!-- content-->
            <div class="card position">
                <div class="card-header">
                    <h4 class="card-title center">Product Verwijderen</h4>
                </div>
                <form id="2DB" method="post" class="form-horizontal">
                    <div class="card-body flex">

                        <div class="form-group col-sm-6">
                            <label for="Productnaam" class="col-sm-4 control-label">Product naam</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="Productnaam" placeholder="Productnaam...">
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="Locatie" class="col-sm-4 control-label">Locatie</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="Locatie" placeholder="Locatie...">
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="Fabriek" class="col-sm-4 control-label">Fabriek</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="Fabriek" placeholder="Fabriek...">
                            </div>
                        </div>

                    </div>
                    <!-- Modal footer start -->
                    <div class="modal-footer">
                        <button id="FormPostAdd" method="POST" type="submit" class="btn btn-default" href="voorraadsystee.php">Annuleer</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Verwijder</button>
                    </div>
                </form>
                <!-- /.modal-footer End -->
            </div>
            <!-- /.card-content End -->
        </div>
        <!-- /.card-dialog -->
    </div>

</body>
</html>