<?php
$Server_Name = "localhost"; //到時改成伺服器IP位址或是「伺服器名+端號口 ex."example.com:3307"」
$User_Name = "root";
$Password = "";
$DB_Name = "Medical_Treatment";

$Connect = new mysqli($Server_Name, $User_Name, $Password, $DB_Name);

if ($Connect->connect_error) {
    die("Connection failed: " . $Connect->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS user_info (
        firstname VARCHAR(255) NOT NULL,
        user_password VARCHAR(255) NOT NULL
    )";

if ($Connect->query($sql) === TRUE) { 
} else {
    echo "Error creating table $DB_Name: " . $Connect->error;
}

$Connect->close();
?>
