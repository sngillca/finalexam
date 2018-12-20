<?php

    function getSQL(){
        if($_SERVER['SERVER_NAME'] == "cst336-natgill.c9users.io"){
            $host = "localhost";
            $username = "nat";
            $password = "cst336";
            $dbname = "race"; 
                
                

            
        } else {
            //mysql://b4029148e24e7f:55681b36@us-cdbr-iron-east-01.cleardb.net/heroku_ca3edc3e549fd72?reconnect=true
            $host = "us-cdbr-iron-east-01.cleardb.net";
            $username = "b4029148e24e7f";
            $password = "55681b36"; //best practice: defined in seperate file that is not commited to GitHub
            $dbname = "heroku_ca3edc3e549fd72";       
            
            //mysql://b25a361e451e0d:59c9239e@us-cdbr-iron-east-01.cleardb.net/heroku_7c872a949548485?reconnect=true
            //mysql://b25a361e451e0d:59c9239e@us-cdbr-iron-east-01.cleardb.net/heroku_7c872a949548485?reconnect=true
        }
        // Create connection
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConn; 
    
    }//end function


?>