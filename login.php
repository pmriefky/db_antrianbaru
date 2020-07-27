<?php
    include_once('config/koneksi.php');
    header('Content-Type: application/json');


    class emp{

    }

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $random = generateRandomString();
    $query1 = mysqli_query($conn, "UPDATE tb_user SET token = '$random' WHERE email = '$email'");
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email' AND password = '$password'");

    $row = mysqli_fetch_array($query);
    if ($row){
        $response = new emp();
        $response1 = new emp();
        $response1->nama = $row['nama'];
        $response1->no_hp = $row['no_hp'];
        $response1->email = $row['email'];
        $response1->token = $row['token'];

        $response->status="200";
        $response->message="login succes";
        $response->data=$response1;
        die(json_encode($response));
    }else{
        $response = new emp();
        $response->status="400";
        $response->message="login failed";
        die(json_encode($response));
    }

    function generateRandomString($length = 30) {
        $characters = '0123456789abcdefghijklmnopqrs092u3tuvwxyzaskdhfhf9882323ABCDEFGHIJKLMNksadf9044OPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>