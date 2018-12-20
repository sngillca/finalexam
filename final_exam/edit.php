<?php

    include "edit_db.php";
    $conn = getSQL();
    $race_id = $_POST["raceid"];
    $race_date = $_POST["date"];
    $start_time = $_POST["time"];
    $loc = $_POST["location"];
   // echo $race_id;
    //echo $loc;

    //EDIT ENTRY
    $conn = getSQL();
    if(checkSet($race_id) && checkSet($race_date) && checkSet($start_time) && checkSet($loc) ){
        $sql = "UPDATE details SET race_location='".$loc."',race_date='".$race_date."',start_time='".$start_time."' WHERE race_id='".$race_id."';"; 
       // echo "<br>HERE: ".$sql;
        $statement = $conn->prepare($sql); 
        $statement->execute(); 
    }
function checkSet($post){
    if(isset($post)){
        return true;
    } else {
        return false;
    }
}
       

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Racing Details</title>
    </head>
    
    
    <body>
        <a href="race.php">Home</a>
        <h1>Race Details Edit Entry</h1>
        <h3>Enter ID of entry you would like to edit, then fill out the fields,
        <br>and your entry will be edited. You will be able 
        <br>to see the changes on the Home Scree.</h3>
        
        <form method="post">
        <div>
            <label for="raceid">Race ID</label>
            <input type="text" name="raceid"/><br><br>
            <label for="date">Race Date</label>
            <input type="date" name="date"/><br><br>
        </div>
        
        <div>
            Start Time <input type="time" name="time"><br><br>
        </div>
        <div>
            <label for="location">Location</label>
            <textarea type="text" name="location"></textarea><br><br>
        </div>
        
        <div>
            <input type="submit" name="enter"/>
        </div>
        </form>
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>        
        <script type="text/javascript" src="main.js"></script>        
    </body>
</html>