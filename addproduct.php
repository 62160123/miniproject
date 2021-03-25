<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "dbpj";

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
    $mysqli->set_charset("utf8"); 

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
 
    }

    if(isset($_POST['submit'])){
            $pdname = $_POST['pdname'];
            $brand = $_POST['brand'];
            $detail = $_POST['detail'];
            $images = $_FILES['images']['name'];
            $target = "images/".basename($images);
            $price = $_POST['price'];

            if(!empty($pdname) && !empty($brand) && !empty($detail) && !empty($images) && !empty($price) && !empty($target)){

                $result = mysqli_query($mysqli,"INSERT INTO product VALUES('$pdname','$brand','$detail','$images','$price')");
                if (move_uploaded_file($_FILES['images']['tmp_name'], $target)) {}
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>ADD_PRODUCT</title>
</head>
<body style="background-color:darkgray;"><center>
<div class="navbar navbar-inverse">
        <a class="navbar-brand" style="text-align: center;">ONLINE STORE <span class="glyphicon glyphicon-shopping-cart"></span></a>
        <ul class="nav navbar-nav">
            <li ><a href="product.html">ADD PRODUCT</a></li>
        </ul>
    </div>
    <h3><b>Upload Successfully</h3>
    <h3><a href="product.html"><span class="glyphicon glyphicon-log-in"></span> BACK </a></b></h3>
</center>
</body>
</html>   