<?php
    include_once('config/koneksi.php');
    header('Content-Type: application/json');


    class emp{

    }

    $email = $_POST['email'];
    $token = $_POST['token'];

    $query = "SELECT * FROM tb_user WHERE email = '$email' AND token = '$token'";
    $row = mysqli_fetch_array(mysqli_query($conn, $query));

    if($row){
        $query = "SELECT tb_bookinglist.* , tb_service.nama_service AS service_name , tb_service.harga FROM tb_bookinglist, tb_service WHERE email = '$email' AND tb_service.kode = tb_bookinglist.kode_service";
        $hasil = mysqli_query($conn, $query);

        if($row = mysqli_fetch_array($hasil)){
            $response = new emp();
            $response1 = new emp();
            $response1->id_booking = $row['id'];
            $response1->email = $row['email'];
            $response1->date = $row['date'];
            $response1->nama_service = $row['service_name'];
            $response1->harga = $row['harga'];

            $response->status="200";
            $response->message="Succes Fetch Data";
            $response->data=$response1;
            die(json_encode($response));
        }else{
            $response = new emp();
            $response->status="400";
            $response->message="Not Booking yet";
            die(json_encode($response));
        }
    }else{
        $response = new emp();
        $response->status="400";
        $response->message="Infalid Token";
        die(json_encode($response));
    }

?>