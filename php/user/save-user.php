<?php
require $_SERVER["DOCUMENT_ROOT"] . '/lab2/config/database.php';

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, gender) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $gender);

// Set parameters and execute
$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$gender = $_POST["gender"];
$stmt->execute();
$stmt->close();
$conn->close();

header("location: ../../index.php?save-success=true");
