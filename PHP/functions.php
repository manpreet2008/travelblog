<?php
    session_start();
    function dbConnect() {
        global $conn;
        $dbServer = "localhost:3308";
        $username = "root";
        $password = "";
        $dbName = "travellog";
        $conn = new mysqli($dbServer, $username, $password, $dbName);

        if($conn->connect_error){
            die("Error: ".$conn->connect_error);
        }
        // echo '<h1 style="color: green;">Connected to DB!</h1>';
    }

    function redirect_to($location){
        header('Location:'.$location);
    }

    function is_auth() {
        return isset($_SESSION['userid']);
    }
    
    function check_auth() {
        if(!is_auth()) {
            redirect_to("/index.php?logged_in=false");
        }
    }
