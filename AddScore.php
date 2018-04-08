<?php
$json = file_get_contents('php://input');
$jsonObj = json_decode($json, true);
/*
var_dump($json);
echo "<br>";
var_dump($jsonObj);
*/

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
echo "Connected successfully";

// prepare and bind
$stmt = $conn->prepare("INSERT INTO RawLiftScores (AquisitionTime, LifterID, Score) VALUES (?, ?, ?)");
if ($stmt == false) {
    echo '<br>';
    var_dump($stmt->error_list);
    echo '<br>';
    die("Statement preperation failed " . "INSERT INTO RawLiftScores (AquisitionTime, LifterID, Score) VALUES (?, ?, ?)");
}
$stmt->bind_param("sss", $AquisitionTime, $LifterID, $Score);

foreach ($jsonObj["liftData"] as $item)
{
    $AquisitionTime = $item["AquisitionTime"];
    $LifterID = $item["LifterID"];
    $Score = $item["Score"];

    //echo $AquisitionTime . " " . $LifterID . " " . $Score . "<br>";
    
    $stmt->execute();
}

echo "New records created successfully";

$stmt->close();
$conn->close();
?>