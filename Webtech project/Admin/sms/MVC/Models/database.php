<?php

        function conn() {
            $serverName="localhost";
            $userName="root";
            $pass="";
            $dbName="webtechsms";
            $conn=new mysqli($serverName,$userName,$pass,$dbName);
            return $conn;     
        }

?>
