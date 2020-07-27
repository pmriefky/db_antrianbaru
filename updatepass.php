<?php
    include_once('config/koneksi.php');
    header('Content-Type: application/json');


    class emp{

    }

    $email = $_POST['email'];
    $password_new = md5($_POST['password_new']);
    $token = $_POST['token'];

    $query = "SELECT * FROM tb_user WHERE email = '$email' AND token = '$token'";
    $row = mysqli_fetch_array(mysqli_query($conn, $query));

    if($row){
        $query1 = mysqli_query($conn,"UPDATE tb_user SET password='$password_new' WHERE email='$email' ");
        if($query1){
            $response = new emp();
            $response->status="200";
            $response->message="Success update password";
            die(json_encode($response));
        }else{
            $response = new emp();
            $response->status="400";
            $response->message="Failed update password";
            die(json_encode($response));
        }
        
    }else{
        $response = new emp();
        $response->status="400";
        $response->message="Invalid Token";
        die(json_encode($response));
    }
?>