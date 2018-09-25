<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
 
<body>
<style>
    .panel-default>.panel-heading {
        color: white;
        background-color: darkgreen;
        border-color: black;
    }
</style>
<div class="container">
    <div class="page-header">
        <h1>
 
            <font color="white">
                <i class="fa fa-hdd-o"></i>
                Database aanspreken
            </font>
        </h1>
 
        <form method="post">
            <table cellpadding="2" cellspacing="2" border="0">
                <tr>
                    <td><font color="white">Query</font></td>
 
                    <td><input type="text" name ="Query" </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name ="bttQuery" value="Submit" </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Databases</div>
                    <ul class="list-group">
                    <?php
                    $query="SHOW DATABASES";
                    $con = mysqli_connect("localhost", "root", "");
                    $result=mysqli_query($con,$query);
 
 
                    if (!mysqli_query($con,$query)) {
                    printf("Error: %s\n", mysqli_error($con));
                    }
                    $row_getRS = mysqli_fetch_assoc($result);
 
                    while( $row = mysqli_fetch_row( $result ) ):
 
                    if (($row[0]!="information_schema") && ($row[0]!="mysql")) {
                    echo "<li class=\"list-group-item\"><a href=\"/Databaseaanspreken/DataBase.php?db=".$row[0]."\"  class=\"list-group-item\">".$row[0]."</a></li>";
 
                    }
                    endwhile;
                    ?>
                    </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Tables</div>
                    <ul class="list-group">
                        <?php
                        $query="SHOW TABLES FROM ".$_GET['db'];
                        $con = mysqli_connect("localhost", "root", "");
                        $result=mysqli_query($con,$query);
 
                        if (!mysqli_query($con,$query)) {
                            printf("Error: %s\n", mysqli_error($con));
                        }
 
                        while( $row = mysqli_fetch_array( $result ) ):
                            echo "<li class=\"list-group-item\"><a href=\"/Databaseaanspreken/DataBase.php?db=".$_GET['db']."&tb=".$row[0]." \"  class=\"list-group-item\">".$row[0]."</a></li>";
                        endwhile;
                        ?>
                    </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">items</div>
                <div class="panel-body">
                    <?php
 
                    if(isset($_POST['bttQuery'])){
                        $query = $_POST['Query'];
                    }else {
                        $query = "SELECT * FROM " . $_GET['tb'];
                    }
                    echo "you executed: ". $query;
                    $con = mysqli_connect("localhost", "root", "", $_GET['db']);
                    $result=mysqli_query($con,$query);
 
                    echo "<table  class=\"table table-striped\">"; // start a table tag in the HTML
                    echo "<thead>";
                    echo "<tr>";
                    while($meta = mysqli_fetch_field($result)){   //Creates a loop to loop through results
                        echo "<th>" . $meta->name . "</th> ";
                    }
                    echo "</tr>";
                    echo "</thead>";
 
                    echo "<tbody>";
                    while($row = mysqli_fetch_row($result)){   //Creates a loop to loop through results
                        echo "<tr>";
                        foreach ($row as $item){
                            echo "<td>" . $item . "</td> ";
                        }
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>"; //Close the table in HTML
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>