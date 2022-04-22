<?php

function connectDatabase() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "web";

    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

    return $conn;
};

function disconnectDatabase($conn) {
    $conn -> close();
};
   

$databaseConnection = connectDatabase();

?>