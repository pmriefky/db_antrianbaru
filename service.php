<?php
include_once('config/koneksi.php');
header('Content-Type: application/json');


class emp{

}

$kode = $_POST['kode'];
$nama_service = $_POST['nama_service'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];

$num_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_service WHERE kode = '$kode'"));
 if ($num_rows == 0){
    $query = mysqli_query($conn, "INSERT INTO tb_service VALUES('$kode','$nama_service','$keterangan','$harga')");
    if($query){
        $response = new emp();
        $response->status='200';
        $response->message='insert service succes';
        die(json_encode($response));
    }
    else{
        $response = new emp();
        $response->status='400';
        $response->message='insert service failed';
        die(json_encode($response));
    }
    
 }else{
        $response = new emp();
            $response->status='200';
            $response->message='service sudah ada';
            die(json_encode($response));
    }

?>