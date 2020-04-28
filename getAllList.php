<?php



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ToDoList";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    
    
    while($row = $result->fetch_assoc()) {

      //  echo "id: " . $row["id"]. " - Name: " . $row["text_notes"]. "<br>";
       
       if($row["mark"] == 0){
        echo'<div id="'.$row['id'].'" class="row_list_html ">
				<label id="list_name_html">'.$row["text_notes"].'</label>
				<input id="'.$row['id'].'" class="mark" onclick="Mark(this)"   type="button" value="Mark as Done" name="">
				<label id="break">|</label>
                <input id="'.$row['id'].'" class="update" onclick="ChangeItem(this)"  type="button" value="Update" name="">
                <label id="break2">|</label>
				<input id="'.$row['id'].'" class="delete" onclick="Delete(this)"  type="button" value="Delete" name="">
			  
               </div>
               
               ';
       }
       else
       {
        echo'<div id="'.$row['id'].'" class="row_list_html markColorCheck ">
                <label id="list_name_html">'.$row["text_notes"].'</label>
                <input id="'.$row['id'].'" class="update" onclick="ChangeItem(this)"  type="button" value="Update" name="">
                <label id="break">|</label>
				<input id="'.$row['id'].'" class="delete" onclick="Delete(this)"  type="button" value="Delete" name="">
			   </div>
               
               ';
       }
        
       
    }
  
   

} else {
    echo " <div class='resultTaskeNull'>0 Results Taske</div>";
}
$result->close();
$conn->close();





?>