<?php


class EmployeeManager
{
    private array $employees;

    public function __construct()
    {
        $this->employees = [];
    }

    public function addEmployee($employee): void
    {
        $this->employees[$employee->getFirstName() . " " . $employee->getLastName()] = $employee;
    }

    public function deleteEmployee(string $fullName)
    {
        unset($this->employees[$fullName]);
    }

    public function getEmployees()
    {
        return $this->employees;
    }
}