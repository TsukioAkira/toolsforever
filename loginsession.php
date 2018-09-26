<?php
include 'login.php';
?>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/loginForm.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/defaultLayout.css">
    <link rel="stylesheet" type="text/css" href="css/buttonStyling.css">
    <link rel="stylesheet" type="text/css" href="css/flexboxgrid.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand">
            <img src="img/icon.png" alt="logo" class="logo">
        </a>

        <!-- Links -->
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">Contact</a>
            </li>

        </ul>

        <ul class="navbar-nav">
            <li class="nav-item btn btn-black">
                <a class="nav-link" href="loginsession.php">Login</a>
            </li>
        </ul>
    </nav>

    <!-- HEADER WEBSITE -->
    <section class="container-fluid test">
        <img class="header-image" src="img/header.png" />
        <div class="header-text">
            <h1 class="text-white">ToolsFor</h1><h1 class="text-orange">Ever</h1>
        </div>
    </section>

<!-- LOGIN WEBSITE-->
    <section class="container-fluid">
        <div class="card position">
            <div class="card-body">
                <div class="col-md-6 offset-3">
                    <div class="Aligner">
                        <div class="login-box">
                            <div class="login-header"><b>Login</b></div>

                            <div class="m15">
                                <form action = "" method = "post">

                                    <ul class="flex-outer">
                                        <li>
                                            <?php
                                            if(isset($loginState))
                                                if ($loginState == false)
                                                    echo '<label class="incorrect">Incorrecte inlog gegevens!</label>';
                                            ?>
                                        </li>
                                        <li>
                                            <label>Username:</label>
                                            <input type = "text" name = "username" class = "box"/>
                                        </li>
                                        <li>
                                            <label>Password:</label>
                                            <input type = "password" name = "password" class = "box" />
                                        </li>
                                        <li class="btn-center btn-position">
                                            <input class="btn-login" type = "submit" name = "logging" value = " Login "/>
                                        </li>
                                    </ul>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>