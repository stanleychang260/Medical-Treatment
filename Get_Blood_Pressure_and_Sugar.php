<?php
$Server_Name = "localhost"; // 之後改成伺服器 IP 或 "example.com:3307"
$User_Name = "root";
$Password = "";
$DB_Name = "medical_treatment";
$Connect = new mysqli($Server_Name, $User_Name, $Password, $DB_Name);

if ($Connect->connect_error) {
    die("Connection failed: " . $Connect->connect_error);
}

// 確保 cookie 存在
if (!isset($_COOKIE['username'])) {
    die(json_encode(["error" => "User not logged in"]));
}

$Table_Name = $_COOKIE['username'];
$date = $_POST['date'];

$sql = "SELECT blood_pressure, blood_sugar FROM $Table_Name WHERE DATE(reg_date) = DATE(?)";
$stmt = $Connect->prepare($sql);
$stmt->bind_param("s", $date);
$stmt->execute();
$result = $stmt->get_result();

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data['blood_pressure'] = $row['blood_pressure'];
        $data['blood_sugar'] = $row['blood_sugar'];
    }
} else {
    $data['blood_pressure'] = null;
    $data['blood_sugar'] = null;
}

$stmt->close();
$Connect->close();

header('Content-Type: application/json');
echo json_encode($data);
?>
