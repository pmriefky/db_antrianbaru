<?php
    include_once('config/koneksi.php');
    header('Content-Type: application/json');


    class emp{

    }

    $kode = $_POST['kode'];
    $query = mysqli_query($conn,"SELECT * FROM tb_service WHERE kode ='$kode'");
    if($arow = mysqli_fetch_array($query)){
        $response = new emp();
        $response1 = new emp();
        $response1->kode=$arow['kode'];
        $response1->nama_service=$arow['nama_service'];
        $response1->keterangan=$arow['keterangan'];
        $response1->harga=$arow['harga'];
        
        $response->status="200";
        $response->message="Succes";
        $response->data=$response1;
        die(json_encode($response));
    }else{
        $response = new emp();
        $response->status="400";
        $response->message="Failed";
        die(json_encode($response));
    }

?>