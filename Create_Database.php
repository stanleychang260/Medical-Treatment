<?php
$Server_Name = "localhost"; //到時改成伺服器IP位址或是「伺服器名+端號口 ex."example.com:3307"」
$User_Name = "root";
$Password = "";

$Connect = new mysqli($Server_Name, $User_Name, $Password);

if ($Connect->connect_error) {
    die("Connection failed: " . $Connect->connect_error);
}

$DB_Name = "Medical_Treatment";
$sql = "CREATE DATABASE IF NOT EXISTS $DB_Name";
if ($Connect->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $Connect->error;
}

$Connect->close();
?>