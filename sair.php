<?php
$servername = "localhost";
    $database = "cacaaotesouro";
    $username = "root";
    $password = "senai";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Falha na Conexão: " . mysqli_connect_error());
    }

    $index = $_GET['var']; 
    $index = 1;
    header("Location: jogotiro.php?var=".urlencode($index));

