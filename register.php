<?php
    include_once('config/koneksi.php');
    header('Content-Type: application/json');

    class emp{

    }

    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $num_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'"));
    if($num_rows == 0){
        $query = mysqli_query($conn, "INSERT INTO tb_user VALUES('','$nama','$username','$no_hp','$email','$password','')");
        if($query){
            $response = new emp();
            $response->status='200';
            $response->message='registation succes';
            die(json_encode($response));
        }
        else{
            $response = new emp();
            $response->status='400';
            $response->message='registation failed';
            die(json_encode($response));
        }
    }else{
        $response = new emp();
            $response->status='200';
            $response->message='email sudah digunakan';
            die(json_encode($response));
    }

?>