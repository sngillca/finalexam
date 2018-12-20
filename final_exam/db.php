<?php
    if($_SERVER['SERVER_NAME'] == "cst336-natgill.c9users.io") { //running on c9
    
        $host = "localhost";
        $username = "nat";
        $password = "cst336"; //best practice: defined in seperate file that is not commited to GitHub
        $dbname = "race"; 
    } else {
        //running on Heroku
        //mysql://b4029148e24e7f:55681b36@us-cdbr-iron-east-01.cleardb.net/heroku_ca3edc3e549fd72?reconnect=true
            $host = "55681b36@us-cdbr-iron-east-01.cleardb.net";
            $username = "b4029148e24e7f";
            $password = "55681b36"; //best practice: defined in seperate file that is not commited to GitHub
            $dbname = "heroku_ca3edc3e549fd72";   
    }




    $conn = mysqli_connect($host, $username, $password,$dbname);
    
    $result = mysqli_query($conn, "SELECT * FROM details");
    
    $data = array();
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    
    echo json_encode($data);
    
?>