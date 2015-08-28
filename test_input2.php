<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$valueYr =$_POST['selectYear'];
$valueMo =$_POST['selectMonth'];
$valueDay =$_POST['selectDay'];
$value1 = $valueYr . "-" . $valueMo ."-". $valueDay;
$value2 = $_POST["input2"];
$value3 = $_POST["input3"];
$value4 = $_POST["input4"];
$value5 = $_POST["input5"];
$value6 = $_POST["input6"];
$value7 = $_POST["input7"];
$value8 = $_POST["input8"];
$value9 = $_POST["input9"];
$value10 = $_POST["input10"];
$value11 = $_POST["input11"];
$value12 = $_POST["input12"];





$sql = "INSERT INTO myWorkouts2 (work_date, mode, type, tot_time_min, tot_time_sec, tot_time_fsec, tot_Meters, pace_min, pace_sec, pace_fsec, SPM, MaxHR)
VALUES ('$value1', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8', '$value9', '$value10', '$value11', '$value12')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully " . $value1 . " " . $value2;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
