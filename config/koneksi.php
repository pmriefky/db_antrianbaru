<?php
    $databaseHost = 'localhost';
    $databaseName = 'antrian_baru';
    $databaseUsername = 'root';
    $databasePassword = '';
    
    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die ("connection failed"); 
?>