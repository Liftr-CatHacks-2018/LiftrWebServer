<?php
$servername = "liftrdb2.cdviygl7ogql.us-east-2.rds.amazonaws.com";
$username = "liftrAdmin";
$password = "Vw5MxF2X6vvJ";
$dbname = "LiftData";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Score FROM RawLiftScores WHERE LifterID = '1' ORDER BY row_names";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "[";
    while($row = $result->fetch_assoc()) {
        echo $row["Score"] . ', ';
    }
    echo "]";
} else {
    echo "0 results";
}

$conn->close();
?>