<?php

include '../backend/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $recievedName = $_POST["username"];
        $recievedPassword = $_POST["password"];

        if (isset($recievedName) && isset($recievedPassword)) {
            $sql = "INSERT INTO users (name, password) VALUES ('$recievedName', '$recievedPassword')";

            $result = mysqli_query($databaseConnection, $sql);

            if ($result){
                echo 1;
            } else{
                echo 0;
            };
        }
    }
};

?>