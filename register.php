<?php
$servername = "localhost";
$username = "root"; // Change based on your DB setup
$password = "";
$dbname = "registration_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$givenName = $_POST['givenName'];
$familyName = $_POST['familyName'];
$idNumber = $_POST['idNumber'];

$sql = "INSERT INTO users (given_name, family_name, id_number) VALUES ('$givenName', '$familyName', '$idNumber')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
