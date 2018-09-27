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

    <!-- Modal voor het Toevoegen van Leden. -->
    <div class="container-fluid" role="document">
        <!-- Modal content-->
        <div class="card position">
            <div class="card-header">
                <h4 class="card-title center">Product Bewerken</h4>
            </div>
            <form id="2DB" method="post" class="form-horizontal">
                <div class="card-body flex">

                    <div class="form-group col-sm-6">
                        <label for="Voornaam" class="col-sm-4 control-label">Voornaam</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Voornaam" placeholder="Voornaam...">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="Achternaam" class="col-sm-4 control-label">Achternaam</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Achternaam" placeholder="Achternaam...">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="Tussenvoegsel" class="col-sm-4 control-label">Tussenvoegsel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Tussenvoegsel" placeholder="Tussenvoegsel...">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="Geslacht" class="col-sm-4 control-label">Geslacht</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Geslacht" placeholder="Geslacht...">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="Organisatie" class="col-sm-4 control-label">Organisatie</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Organisatie" placeholder="Organisatie...">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="ContactPersoon" class="col-sm-4 control-label">Contact Persoon</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Contact_persoon" placeholder="Contact Persoon...">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="Email" class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Email" placeholder="Email...">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="FormPostAdd" method="POST" type="submit" class="btn btn-default" href="voorraadsystee.php">Toevoegen</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuleren</button>
                </div>
            </form>
            <!-- /.modal-footer End -->
        </div>
        <!-- /.modal-content End -->
    </div>
    <!-- /.modal-dialog -->
</body>
</html>