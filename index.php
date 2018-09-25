<?php
session_start();

if(isset($_POST['bttLogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    echo "<br>";
    echo $password;
    if(mysqli_connect("localhost", $username, $password)){
        $_SESSION['login_user'] = $username;
        echo "wa";
        header("location: DataBase.php");
    }
    else
        echo"OOPS! wrong username or password";
}
?>
<form method="post">
    <table cellpadding="2" cellspacing="2" border="0">
        <tr>
            <td><font color="white">Username</font></td>

            <td><input type="text" name =<font"username" </td>
        </tr>
        <tr>
            <td><font color="white">Password</font></td>
            <td><input type="password" name ="password" </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name ="bttLogin" value="Login" </td>
        </tr>
    </table>
</form>