<?php

require $_SERVER["DOCUMENT_ROOT"] . '/lab2/config/database.php';

$sql = "SELECT * FROM users WHERE deleted_at IS NULL";
$result = $conn->query($sql);

$conn->close();
