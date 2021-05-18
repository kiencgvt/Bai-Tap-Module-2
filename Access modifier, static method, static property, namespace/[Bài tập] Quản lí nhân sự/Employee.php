<?php


class Employee
{
    private string $firstName;
    private string $lastName;
    private string $dateOfBirth;
    private string $address;
    private string $jobPosition;

    public function __construct($firstName = '', $lastName = '', $dateOfBirth = '', $address = '', $jobPosition = '')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->jobPosition = $jobPosition;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getJobPosition(): string
    {
        return $this->jobPosition;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function setDateOfBirth(string $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function setJobPosition(string $jobPosition): void
    {
        $this->jobPosition = $jobPosition;
    }
}