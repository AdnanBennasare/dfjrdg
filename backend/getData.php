<?php
// Connect to the database
$dsn = 'mysql:host=localhost;dbname=data';
$username = 'root';
$password = '';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$db = new PDO($dsn, $username, $password, $options);

// Fetch the data from the database
$stmt = $db->query('SELECT * FROM `budget`');
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($data);
// Return the data as JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($data);
?>