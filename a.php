<?php
$servername = "localhost:3306";
$username = "root";
$password = "a94033143";
$dbname = "Changg";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO fb (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "註冊成功";
} else {
    echo "錯誤: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
