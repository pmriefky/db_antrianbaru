<?php
    include_once('config/koneksi.php');
    header('Content-Type: application/json');


    class emp{

    }

    $query = "SELECT tb_user.nama, tb_service.nama_service, tb_bookinglist.date FROM tb_service, tb_user, tb_bookinglist WHERE tb_user.email = tb_bookinglist.email AND tb_bookinglist.kode_service = tb_service.kode";
    $hasil = mysqli_query($conn, $query);

    if(mysqli_num_rows($hasil)>0){
        $response = new emp();
        $response1 = array();
        while($x = mysqli_fetch_array($hasil)){
            $h['nama']=$x['nama'];
            $h['nama_service']=$x['nama_service'];
            $h['date']=$x['date'];
            array_push($response1, $h);
        }
        $response->status="200";
        $response->message="Success";
        $response->data=$response1;
        
        die(json_encode($response));  
    }else{
        $response = new emp();
        $response->status="400";
        $response->message="Failed";
        die(json_encode($response));    
    }
?>