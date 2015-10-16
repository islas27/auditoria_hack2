<?php

    function my_connection (){
        /**
         * @var string $DBServer
         * @var string $DBUser
         * @var string $DBPass
         * @var string $DBName
         * @var int $DBPort
         *
         * Object Oriented Connection
         */

        //Server dependant variables
        include("server_vars.php");

        $conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName, $DBPort);

        // check connection
        if ($conn->connect_error) {
            $date = date("F j, Y, h:i:s a");
            error_log("Database conn fail: $conn->connect_error at $date\n", 3, "error_log.txt");
            header("Location: index.php?error=0");
        }
        //set charset for supporting latin characters
        if(!$conn->set_charset("utf8")){
            $date = date("F j, Y, h:i:s a");
            error_log("Error loading utf8: $conn->error at $date\n", 3, "error_log.txt");
        }

        return $conn;

    }
?>