<?php
require_once 'Person.php';

class Employee extends Person {
    private string $jobPosition;
    protected float $salary;

    public function __construct($id,$firstName, $lastName, $dateOfBirth, $address, $jobPosition, $salary) {
        parent::__construct($id, $firstName, $lastName, $dateOfBirth, $address);
        $this->jobPosition = $jobPosition;
        $this->salary = $salary;
    }

    // Getters
    public function getJobPosition(): string {
        return $this->jobPosition;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    // Setters
    public function setJobPosition($jobPosition): void {
        $this->jobPosition = $jobPosition;
    }

    public function setSalary($salary): void {
        $this->salary = $salary;
    }

    // Convert object to array for JSON storage
    public function toArray(): array {
        return [
            'id' => $this->getId(),
            'firstName' => $this->getFirstName(),
            'lastName' => $this->getLastName(),
            'dateOfBirth' => $this->getDateOfBirth(),
            'address' => $this->getAddress(),
            'jobPosition' => $this->jobPosition,
            'salary' => $this->salary,
        ];
    }

    // Create object from array
    public static function fromArray(array $data): Employee {
        return new Employee(
            $data['id'],
            $data['firstName'],
            $data['lastName'],
            $data['dateOfBirth'],
            $data['address'],
            $data['jobPosition'],
            $data['salary']
        );
    }
}
?>
