<?php
$servername = "liftrdb2.cdviygl7ogql.us-east-2.rds.amazonaws.com";
$username = "liftrAdmin";
$password = "Vw5MxF2X6vvJ";
$dbname = "LiftData";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT row_names FROM RawLiftScores WHERE LifterID = '1' ORDER BY row_names";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "[";
    while($row = $result->fetch_assoc()) {
        echo '"' . $row["row_names"] . '", ';
    }
    echo "]";
} else {
    echo "0 results";
}

$conn->close();
?>