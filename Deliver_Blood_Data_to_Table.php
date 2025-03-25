<?php
if (isset($_POST['pressure']) && !empty($_POST['pressure']) && 
    isset($_POST['sugar']) && !empty($_POST['sugar']) && 
    isset($_POST['date']) && !empty($_POST['date'])) {

    // 使用 Cookie 獲取 username，並檢查是否存在
    if (!isset($_COOKIE['username'])) {
        die('<script>alert("用戶未登入，請先登入!"); window.location.href="/Medical_Treatment/otherphp/login.php";</script>');
    }

    $User_Name = $_COOKIE['username'];
    $pressure = $_POST['pressure'];
    $sugar = $_POST['sugar'];
    $clicked_date = $_POST['date'];

    // 連接資料庫
    $host = "localhost";
    $Database_Username = "root";
    $Database_Password = "";
    $Database_Name = "medical_treatment";

    $Connection = new mysqli($host, $Database_Username, $Database_Password, $Database_Name);
    if ($Connection->connect_error) {
        die("Connection failed： " . $Connection->connect_error);
    }

    // 使用 Prepared Statement 防止 SQL 注入
    $sql = "INSERT INTO $User_Name (blood_pressure, blood_sugar, reg_date) VALUES (?, ?, ?)";
    $stmt = $Connection->prepare($sql);
    $stmt->bind_param("iis", $pressure, $sugar, $clicked_date);

    if ($stmt->execute()) {
        echo '<script>alert("資料新增成功，將回到月曆頁面!"); 
                 window.location.href="/Medical_Treatment/otherphp/date.php";</script>';
    } else {
        echo '<script>alert("傳入失敗，請重試!"); window.location.href="/Medical_Treatment/otherphp/date.php";</script>';
    }

    $stmt->close();
    $Connection->close();
} else {
    echo '<script>alert("請完整填寫所有欄位!"); window.location.href="/Medical_Treatment/otherphp/date.php";</script>';
}
?>
