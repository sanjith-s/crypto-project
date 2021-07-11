<?php
    require ("database.php");
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
	$mobile = $_REQUEST["mobile"];
	$address = $_REQUEST["address"];
    $email = $_REQUEST["email"];
    echo $email;
    $dataBase = dbConnection();
	$update = "UPDATE user SET username='$name', age='$age', contact='$mobile', address='$address' WHERE email=$email";
    mysqli_query($dataBase, $update);
?>