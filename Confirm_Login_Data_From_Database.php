<?php
include 'Create_User_Info_Table.php';

if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $account = $_POST['username'];
    $password = $_POST['password'];

    $host = "localhost";
    $Database_Username = "root";
    $Database_Password = "";
    $Database_Name = "medical_treatment";

    $Connection = new mysqli($host, $Database_Username, $Database_Password, $Database_Name);
    if ($Connection->connect_error) {
        die("Connection failed： " . $Connection->connect_error);
    }

    $query = "SELECT user_password FROM user_info WHERE firstname=?";
    $stmt = $Connection->prepare($query);
    $stmt->bind_param("s", $account);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['user_password'])) {           
            // 設定 Cookie，時效 1 小時
            setcookie("username", $account, time() + 3600, "/"); 

            header("Location: /Medical_Treatment/otherphp/person.php");
            $stmt->close();
            $Connection->close();
            exit();
        } else {
            echo '<script>alert("密碼不正確，請重新輸入!"); 
                 window.location.href="/Medical_Treatment/otherphp/login.php";</script>';
            $stmt->close();
            $Connection->close();
            exit();
        }
    } else {
        echo '<script>alert("不存在此用戶，請註冊帳號!"); 
             window.location.href="/Medical_Treatment/otherphp/register.php";</script>';
        $stmt->close();
        $Connection->close();
        exit();
    }
} else {
    echo '<script>alert("用戶名稱或密碼未填寫!"); 
         window.location.href="/Medical_Treatment/otherphp/login.php";</script>';
    exit();
}
?>
