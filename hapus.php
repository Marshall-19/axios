<?php

$con = new mysqli('localhost', 'root', '', 'axious') or die('error');
$id = $_GET['id'];
$con->query("DELETE FROM tb_data WHERE id='$id'");
$pesan = "Data Terhapus";
echo json_encode($pesan);