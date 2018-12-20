<!DOCTYPE html>
<html>
    <head>
        <title>Final Exam</title>
        <style type="text/css">
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
          font-size: 20px;
        
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
         
          
        }
        
        tr:nth-child(even) {
          background-color: #F0F8FF;
          
        }
        </style>
    </head>
    <body>
      
        
        <table>
       
          <tr>
          <th>ID</th>
          <th>Date</th>
          <th>Start Time</th>
          <th>Location</th>
          </tr>
          
          <tr>
              <td>
                  <div id="raceid"></div>
              </td>
              <td>
                  <div id="racedate"></div>
              </td>
              <td>
                  <div id="racetime"></div>
              </td>
              <td>
                  <div id="raceloc"></div>
              </td>
          </tr>
        </table>
        
        
        ADD NEW ENTRY
        <button class="add action">
          <img src="racing-add.png" width="40px"></img>
        </button>
 
        EDIT ENTRY
        <button class="edit action">
          <img src="racing-actions-edit.png" width="40px"></img>
        </button>
        ARCHIVE ENTRY
        <button class="archive action">
          <img src="racing-actions-cancel.png" width="40px"></img>
        </button>
 
  <h3>note my phpmyadmin has a username=nat and password=cst336</h3>


        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>        
        <script type="text/javascript" src="main.js"></script>
    </body>
</html>