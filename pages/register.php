<!doctype html>

<html lang="en">
    <head>
        <link rel="stylesheet/less" type="text/css" href="../styles/login.less" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Proiect - Tehnologii web</title>
    </head>
    <body>
    <div id="notification">
            <div class="box">
                <span id="notText"></span>
            </div>
        </div>
        <div class="container">
            <div class="login">
                <div class="left">
                    <img src="../images/logo.png">
                </div>

                <div class="right">
                    <div class="title">
                        <h2>Register</h2>
                    </div>
                    <form action="" name="register" method="post">
                        <div class="inputs">
                            <input type="text" name="username"></input>
                            <input type="password" name="password"></input>
                        </div>

                        <div class="button">
                            <button type="submit">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script src="../scripts/less.min.js" type="text/javascript"></script>
    <script src="../scripts/script.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(function(){
            $("form[name='register']").validate({
                rules: {
                    username: "required",
                    password: "required"
                },

                messages: {
                    username: "The username is required.",
                    password: "The password in required."
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
</html>

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
                echo '<script>showNotification("User registered.");</script>';
            } else{
                echo '<script>showNotification("Querry error.");</script>';;
            };
        }
    }
};

?>