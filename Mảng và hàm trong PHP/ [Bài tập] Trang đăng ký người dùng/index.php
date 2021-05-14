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
<form action="" method="post">
    User Name: <input type="text" name="userName"><br>
    Email: <input type="text" name="email"><br>
    Phone Number: <input type="number" name="phoneNumber">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
}
if (empty($userName) || empty($email) || empty($phoneNumber)) {
    echo "Không được để trống thông tin";
}
else {
    if (filter_var($email, 274)) {

    }
}
function saveDataJSON(filename, $name, $email, $phone) {

}
?>
</body>
</html>