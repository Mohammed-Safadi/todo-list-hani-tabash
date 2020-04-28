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


if($_POST){

    $id=$_POST['id'];
// sql to delete a record
$sql = "DELETE FROM list WHERE id =$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

}



$conn->close();

?>