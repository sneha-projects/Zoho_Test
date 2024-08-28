<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Test_Zoho";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *FROM student_table";
$result = $conn->query($sql);

$students = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
} else {
    echo "0 results";
}
echo json_encode($students);
$conn->close();
?>
