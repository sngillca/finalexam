<?php

    include "./edit_db.php";
    $conn = getSQL();
    $race_id = $_POST["raceid"];
 
    //ADD ENTRY
    $conn = getSQL();
    if(isset($race_id) ){
        //JOIN BEFORE DELETING
        $sql = "INSERT INTO archive VALUES ('".$race_id."');";
        $sql = "DELETE FROM details WHERE race_id='".$race_id."';";
      //  echo "<br>HERE: ".$sql;
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
        <title>Add a New</title>
    </head>
    
    
    <body>
        <a href="./race.php">Home</a>
        <h1>Archive/Delete Race</h1>
        <h3>You will no longer be able to see it on
        <br>the home screen. Enter a Race ID to archive.</h3>
        <form method="post">
        <div>
            <label for="raceid">Race ID</label>
            <input type="text" name="raceid"/><br><br>
        </div>
        

        <div>
            <input type="submit" name="enter"/>
        </div>
        </form>
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>        
        <script type="text/javascript" src="main.js"></script>        
    </body>
</html>