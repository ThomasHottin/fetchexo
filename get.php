<?php
$host = "localhost";
$dbname = "fetchexo";
$username = "root";
$password = "";

$dbConnect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$sql = "SELECT * FROM name";
$stmt = $dbConnect->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $json1 = json_encode($data);

// echo $json1;

var_dump(json_encode($data));

?>