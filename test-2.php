<?php
class Student{
    public string $name, $email, $phone, $address;
    function __construct($name, $email, $phone, $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }
    function getInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Phone: " . $this->phone . "<br>";
        echo "Address: " . $this->address . "<br>";
    }
}
$studen1 = new Student("Quân", "quan@gmail.com", "123", "Phú Thọ");
$studen1->getInfo();
$studen2 = new Student("Ninh", "ninh@gmail.com", "456", "Phú Thọ");
$studen2->getInfo();
$studen3 = new Student("Cường", "cuong@gmail.com", "789", "Phú Thọ");
$studen3->getInfo();