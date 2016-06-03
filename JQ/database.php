<?php

    $servername = "mysql.exunclan.com";
    $username = "exunclan";
    $password = "tac!oxte";
    $database = "exunclan_wp";
    $dbport = 3306;

    $db = new mysqli($servername, $username, $password, $database, $dbport);

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    
?>