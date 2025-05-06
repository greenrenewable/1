<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "registration_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, given_name, family_name, id_number FROM users";
$result = $conn->query($sql);

echo "<h2>Registered Users</h2>";
echo "<table border='1'><tr><th>ID</th><th>Given Name</th><th>Family Name</th><th>ID Number</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["given_name"]."</td><td>".$row["family_name"]."</td><td>".$row["id_number"]."</td></tr>";
    }
} else {
    echo "<tr><td colspan='4'>No records found</td></tr>";
}

echo "</table>";

$conn->close();
?>
