<?php 
    $host = "localhost";
    $username = "nat";
    $password = "cst336"; //best practice: defined in seperate file that is not commited to GitHub
    $dbname = "race"; 
    $conn = mysqli_connect($host, $username, $password,$dbname);
    
    $result = mysqli_query($conn, "SELECT * FROM details");
    
    $data = array();
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    
   echo json_encode($data);

?>

