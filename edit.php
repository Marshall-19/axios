<?php

$con = new mysqli('localhost', 'root', '', 'axious') or die('error');

// $json = file_get_contents('php://input');
// $_GET = json_decode($json, true);

$id = $_GET['id'];
$data = $con->query("SELECT * FROM tb_data data where id='$id'")->fetch_assoc();

echo json_encode($data);