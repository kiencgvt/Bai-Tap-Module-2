<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Tên người dùng: <input type="text" name="username">
    Email: <input type="text" name="email">
    Điện thoại: <input type="text" name="phoneNumber">
    <input type="submit" value="Gửi đi">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Lấy dữ liệu từ form
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $phoneNumber = $_REQUEST["phoneNumber"];
    if (empty($username) || empty($email) || empty($phoneNumber)) {
        echo "Không được để thông tin rỗng";
    }
    else {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            saveDataJSON("users.json", $username, $email, $phoneNumber);
        }
        else {
            echo "Định dạng email không đúng!";
        }
    }
    function saveDataJSON($filename, $username, $email, $phoneNumber) {
        $dataCurrent = getDataJSON($filename);
        $contact = ["username" => $username,
            "email" => $email,
            "phoneNumber" => $phoneNumber
        ];
        $dataCurrent[] = $contact;
        //Hàm json_encode là hàm chuyển mảng về JSON
        $contactJSON = json_encode($contact);
        //Lưu dữ liệu vào file
        file_put_contents($filename, $contactJSON);
    }
    function getDataJSON($filename) {
        //Đọc dữ liệu từ file dùng hàm file_get_contents, dữ liệu trả về thuộc kiểu dữ liệu JSON
        $dataIntoFile = file_get_contents($filename);
        //Chuyển dữ liệu từ JSON về mảng dùng hàm json_decode
        $dataArray = json_decode($dataIntoFile, true);
        return $dataArray;
    }
}
?>
</body>
</html>