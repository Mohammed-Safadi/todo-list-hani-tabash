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

if ($_POST) {

  $notes =$_POST['text_notes'];
  $date=date("Y-m-d");
  
$sql = "INSERT INTO list (text_notes,mark,entry_date)
VALUES ('$notes',0,$date)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
 
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
else
{
  echo 'not data';
}

?>



