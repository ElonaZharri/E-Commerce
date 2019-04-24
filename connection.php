<?php
    session_start(); //remember what I did when log in and log out
    function connect(){
        $hostname="Localhost"; 
        $username="kimd35_admin";
        $password="admin12341234";
        $database="kimd35_1st_look";
        
        static $link;
        $connection = mysqli_connect($hostname, $username, $password, $database);
        
        if($connection === false) {
            echo "connection not successful";
    }
    
    return $connection;
    }
?>