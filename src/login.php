<?php
    require ("database.php");
    $user = $_REQUEST["username"];
    $pass = $_REQUEST["password"];

    $dataBase = dbConnection();
    $res = $dataBase->query("select * from tester where username = '$user' , pass='$pass");
    if($res->num_rows > 0){
        $resultObject = array("status" => 1); 
    } else {
        $resultObject = array("status" => 0);
    }

    echo json_encode($resultObject);
?>