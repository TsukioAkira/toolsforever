<?php
include 'login.php';
?>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/loginForm.css">
    <link rel="stylesheet" type="text/css" href="css/flexboxgrid.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
    <div class="container-fluid">
        <div class="card">
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
    </div>
</body>
</html>