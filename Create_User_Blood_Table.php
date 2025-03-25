<?php
function CreateBloodTable($pdo, $firstname)
{
    try {
        $sql_create_user_table = "CREATE TABLE IF NOT EXISTS $firstname (
                                    blood_pressure INT,
                                    blood_sugar INT,
                                    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                                )";
        $pdo->exec($sql_create_user_table);
        
    } catch (PDOException $e) {
        echo "血壓資料表建立失敗: " . $e->getMessage();
    }
}
?>