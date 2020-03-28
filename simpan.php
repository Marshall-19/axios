<?php

$con = new mysqli('localhost', 'root', '', 'axious') or die('error');

$json = file_get_contents('php://input');
$_POST = json_decode($json, true);
// decode untuk memecah data ke array
//  encode untuk menampung data array
if ($_POST['id'] == NULL or $_POST['id'] == 0) {

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $tanggal = $_POST['tanggal'];
    $con->query("INSERT INTO tb_data(nama,umur,tanggal) VALUES ('$nama','$umur','$tanggal')");
} else {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $tanggal = $_POST['tanggal'];
    $con->query("UPDATE tb_data SET nama='$nama', umur='$umur', tanggal='$tanggal' WHERE id='$id'");
}


$pesan = "Data Berhasil Diinputkan";
echo json_encode($pesan);
