<?php
include_once "Employee.php";
include_once "EmployeeManager.php";
$employeeManager = new EmployeeManager();
$employee1 = new Employee("Đỗ", "Trung Kiên", "13-05-1998", "751 phố Đình Ấm, phường Khai Quang, thành phố Vĩnh Yên, tỉnh Vĩnh Phúc", "Học sinh");
$employeeManager->addEmployee($employee1);
$employee2 = new Employee("Đỗ", "Văn Kiên", "13-05-1998", "751 phố Đình Ấm, phường Khai Quang, thành phố Vĩnh Yên, tỉnh Vĩnh Phúc", "Học sinh");
$employeeManager->addEmployee($employee2);
$employeeManager->deleteEmployee("Đỗ Trung Kiên");
$employees = $employeeManager->getEmployees();
foreach ($employees as $employee) {
    echo $employee->getLastName() . "<br/>";
}
