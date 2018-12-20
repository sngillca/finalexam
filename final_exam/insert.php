<?php 
    $host = "localhost";
    $username = "nat";
    $password = "cst336"; //best practice: defined in seperate file that is not commited to GitHub
    $dbname = "race"; 
    $conn = mysqli_connect($host, $username, $password,$dbname);
    
    if($_REQUEST['name']){
        $name = $_REQUEST['name'];
            
      
        
        $q = "insert into details values('beep',".$name.",'boop');";
        
        $query = mysqli_query($conn, $q);
        
        if($query){
            echo 'data inserted success';
    }
  }
?>

