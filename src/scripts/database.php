<?php

    function dbConnection(){
        $user = "root";
        $password = "";
        $hostUrl = "localhost";
        $dbname = "project";
        $port = "3306";
        $conn = new PDO("mysql:host=$hostUrl;port=$port;dbname=$dbname", $user, $password);
        return $conn;
    }
?>