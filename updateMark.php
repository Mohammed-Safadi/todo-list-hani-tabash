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
    $mark=$_POST['mark'];

$sql = "UPDATE list SET mark= $mark WHERE id=$id";

if ($conn->query($sql) === TRUE) 
{
    echo "Record updated successfully";
}
else 
{
    echo "Error updating record: " . $conn->error;
}

}



$conn->close();

?>