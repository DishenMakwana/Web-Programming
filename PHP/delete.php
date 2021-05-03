<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "employee";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$en = $_GET["en"];
$sql = "DELETE FROM employee_master WHERE emp_id=$en";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: http://localhost/WP/showdb.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
