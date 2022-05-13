<?php

include '../backend/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $recievedName = $_POST["username"];
        $recievedPassword = $_POST["password"];

        if (isset($recievedName) && isset($recievedPassword)) {
            $sql = "SELECT id, name, password FROM users WHERE name='$recievedName' AND password='$recievedPassword'";
            $result = mysqli_query($databaseConnection, $sql);

            if ($result){
                if ($result->num_rows > 0) {
                    echo 1;
                } else {
                    echo 0;
                }
            } else{
                echo 0;
            };
        }
    }
};

?>