<?php

include './backend/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["message"])) {
        $recievedFeedback = $_POST["message"];
        
        if (isset($recievedFeedback)) {
            $sql = "INSERT INTO feedback (feedbackMessage) VALUES ('$recievedFeedback')";

            if (mysqli_query($databaseConnection, $sql)){
                echo 1;
            } else{
                echo 0;
            };
        };
    }
};

?>