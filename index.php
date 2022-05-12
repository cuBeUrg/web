<!doctype html>

<html lang="en">
    <head>
        <link rel="stylesheet/less" type="text/css" href="./styles/styles.less" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Proiect - Tehnologii web</title>
    </head>
    <body>
        <button onclick="topFunction()" id="scTop">Top</button>
        <div id="notification">
            <div class="box">
                <span id="notText"></span>
            </div>
        </div>
        <div class="navbar">
            <div class="left-part">
                <img src="./images/logo.png">
            </div>
            <div class="right-part">
                <div class="options">
                    <span><a href="#first">Home</a></span>
                    <span><a href="#second">About</a></span>
                    <span><a href="#third">Partners</a></span>
                    <span><a href="#fourth">About us</a></span>
                    <span><a href="http://localhost/tehnologiiWeb/pages/login.php">Login</a></span>
                    <span><a href="http://localhost/tehnologiiWeb/pages/register.php">Register</a></span>
                </div>
            </div>
        </div>
        <section id="first">
            <div class="text-div">
                <h1 id="pageName">
                    
                </h1>
                <span>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </span>
            </div>
        </section>
        <section id="second">
            <div class="about">
                <h2>About us</h2>
                <hr>
            </div>
            <div class="grid">
                
            </div>
           
        </section>
        <section id="third">
            <div class="partners">
                <h2>Our partners</h2>
                <hr>
                <div class="images">
                    <div class="image">
                        <img src="./images/partners/endava.png">
                    </div>
                    <div class="image">
                        <img src="./images/partners/amdaris.png">
                    </div>
                </div>
            </div>
        </section>
        <section id="fourth">
            <h2>Contact us</h2>
            <hr>
            <form action="" name="feedback" method="post">
                <textarea name="message" id="message" cols="60" rows="7"></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </body>
    <script src="./scripts/less.min.js" type="text/javascript"></script>
    <script src="./scripts/script.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(function(){
            $("form[name='feedback']").validate({
                rules: {
                    message: "required",
                },

            messages: {
                message: "The message is required.",
            },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
    </script>
</html>

<?php

include './backend/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["message"])) {
        $recievedFeedback = $_POST["message"];
        
        if (isset($recievedFeedback)) {
            $sql = "INSERT INTO feedback (feedbackMessage) VALUES ('$recievedFeedback')";

            if (mysqli_query($databaseConnection, $sql)){
                echo '<script>showNotification("Login sent.");</script>';
            } else{
                echo "Error.";
            };
        };
    }
};

?>