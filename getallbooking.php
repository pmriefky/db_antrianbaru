<?php
    include_once('config/koneksi.php');
    header('Content-Type: application/json');


    class emp{

    }

    $query = "SELECT * FROM tb_bookinglist";
    $hasil = mysqli_query($conn, $query);

    if(mysqli_num_rows($hasil)>0){
        $response = new emp();
        $response1 = array();
        while($x = mysqli_fetch_array($hasil)){
            $h['kode_service']=$x['kode_service'];
            $h['email']=$x['email'];
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