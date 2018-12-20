$(function() {
   
   $("button.edit").on("click", function(e){
      window.location.href='edit.php';
      
   })
   
   
   $("button.add").on("click", function(e){
      window.location.href='add.php';
      
   })
   $("button.archive").on("click", function(e){
       window.location.href='archive.php';
   
   })//buton save
});


var thingData;

$.ajax({
    type: "GET",
    url: "db.php",
    dataType: "json",
    success: function(data, status) {
      thingData = data;
      console.log("Got data in GET check 1", data);
      for(var a = 0; a < data.length; a++){
          console.log(data[a].author);
          $("#raceid" ).append(data[a].race_id);
          $("#raceid" ).append("<br>");
          $("#racedate" ).append(data[a].race_date);
          $("#racedate" ).append("<br>");
          $("#racetime" ).append(data[a].start_time);
          $("#racetime" ).append("<br>");
          $("#raceloc" ).append(data[a].race_location);
          $("#raceloc" ).append("<br>");
     }
      
    },
    error: function(err) {
      console.log("Didn't get data", err);
    }
 });
        