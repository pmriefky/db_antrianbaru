<?php
    include_once('config/koneksi.php');
    header('Content-Type: application/json');


    class emp{

    }

    $kode_service = $_POST['kode_service'];
    $email = $_POST['email'];
    $token = $_POST['token'];
    $date = $_POST['date'];
    $query = "SELECT * FROM tb_user WHERE email = '$email' AND token = '$token'";
    
    $row = mysqli_fetch_array(mysqli_query($conn, $query));

    if($row){
        $row1 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tb_service WHERE kode ='$kode_service' "));
        if($row1){
            $num_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_bookinglist WHERE email = '$email'"));
            if($num_rows == 0){
            $query = mysqli_query($conn, "INSERT INTO tb_bookinglist VALUES('','$kode_service','$email','$date')");
       if($query){
           $response = new emp();
           $response->status='200';
           $response->message='Booking Succes';
           die(json_encode($response));
           }   
            else{
                $response = new emp();
                $response->status='400';
                $response->message='Booking failed';
                die(json_encode($response));
           }
        }else{
           $response = new emp();
           $response->status='400';
           $response->message='Your already booked';
           die(json_encode($response));
   }            
        }else{
            $response = new emp();
           $response->status='400';
           $response->message='Service not found';
           die(json_encode($response));
        }


    }else{
        $response = new emp();
        $response->status='400';
        $response->message='Infalid token';
        die(json_encode($response));
    }

   
?>