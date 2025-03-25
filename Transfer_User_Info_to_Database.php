<?php
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['check_password']) && !empty($_POST['check_password'])) {
    $firstname = $_POST["username"];
    $user_password = $_POST["password"];
    $check_password = $_POST["check_password"];
    if ($user_password != $check_password) {
        echo "<script>alert('密碼與確認密碼不一致，請重新輸入!!!');window.location.href = '/Medical_Treatment/otherphp/register.php';</script>";
        exit();
    }

    include ("Create_User_Info_Table.php");
    include ("Create_User_Blood_Table.php");

    try {
        if (ctype_digit(substr($firstname, 0, 1))) {
            echo "<script>alert('註冊名稱第一個字不可為數字！'); window.location.href = '/Medical_Treatment/otherphp/register.php';</script>";
            exit;
        }

        $pdo = new PDO('mysql:host=localhost;dbname=medical_treatment;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $Existing_User_Search = $pdo->prepare('SELECT COUNT(*) FROM user_info WHERE firstname = ?');
        $Existing_User_Search->execute([$firstname]);
        $Existing_User_Count = $Existing_User_Search->fetchColumn();

        if ($Existing_User_Count > 0) {
            echo "<script>alert('已有其他用戶使用相同名稱，請換一個！');window.location.href = '/Medical_Treatment/otherphp/register.php';</script>";
            exit();
        }

        $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

        $sql = $pdo->prepare('INSERT INTO user_info (firstname, user_password) VALUES (?,?)');

        if ($sql->execute([$firstname, $hashed_password])) {
            CreateBloodTable($pdo, $firstname);
        } else {
            echo "新增失敗 111";
        }
        echo "<script>
            setTimeout(function() {
                alert('註冊成功，按確定以返回登入介面!!!');
                window.location.href = '/Medical_Treatment/otherphp/login.php';
            }, 2000);
        </script>";
    } catch (PDOException $e) {
        echo "新增失敗 222: " . $e->getMessage();
    }
} else {
    echo "<script>alert('您未輸入帳號或密碼!!!');window.location.href = '/Medical_Treatment/otherphp/register.php';</script>";
    exit();
}
?>