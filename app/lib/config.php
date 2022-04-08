<?php

//Thông tin cấu hình
define('URL_DEMO', (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST']);
define('URL_CALLBACK', 'alepay-v3-example/result.php'); // URL đón nhận kết quả 
//Alepay cung cấp 

/* $config = array(
    "apiKey" => "0COVspcyOZRNrsMsbHTdt8zesP9m0y", //Là key dùng để xác định tài khoản nào đang được sử dụng.
    "encryptKey" => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCIh+tv4h3y4piNwwX2WaDa7lo0uL7bo7vzp6xxNFc92HIOAo6WPZ8fT+EXURJzORhbUDhedp8B9wDsjgJDs9yrwoOYNsr+c3x8kH4re+AcBx/30RUwWve8h/VenXORxVUHEkhC61Onv2Y9a2WbzdT9pAp8c/WACDPkaEhiLWCbbwIDAQAB", //Là key dùng để mã hóa dữ liệu truyền tới Alepay.
    "checksumKey" => "hjuEmsbcohOwgJLCmJlf7N2pPFU1Le", //Là key dùng để tạo checksum data.
    "callbackUrl" => URL_CALLBACK,
    "env" => "test",
); */


$config = array(
    "apiKey" => "RpMkK0JfiwhEWdfjA6TZi7qKRvoKrz", //Là key dùng để xác định tài khoản nào đang được sử dụng.
    "encryptKey" => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDejJkDxom33dul1nlfLP2ScA6V/i57+8Bqee8p9Gc4fYYJbvEAZQPjN4RRuszDvQrogx/jNEowq+JuHXE8nFXsd6MNdcV+A3f80xFsnmvcMvBIdiMDuYYoopL6f4XjRHGZZouN8mcMc9ZvVVWLS3x2Umyt84beNQDhIAhPD9LocQIDAQAB", //Là key dùng để mã hóa dữ liệu truyền tới Alepay.
    "checksumKey" => "d7hEU8EAha7ReAtgnmpDbfjpbKgdvx", //Là key dùng để tạo checksum data.
    "callbackUrl" => URL_CALLBACK,
     "env" => "test",
);
?>