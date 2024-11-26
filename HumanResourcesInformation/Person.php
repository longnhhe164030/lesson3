<?php
class Person {
    private $id;
    private string $firstName;
    private string $lastName;
    private string $dateOfBirth;
    private string $address;

    public function __construct($id,$firstName, $lastName, $dateOfBirth, $address) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
    }

    // Getters
    public function getId() {
        return $this->id;   
    }
    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getDateOfBirth(): string {
        return $this->dateOfBirth;
    }

    public function getAddress(): string {
        return $this->address;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }
    public function setFirstName($firstName): void {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName): void {
        $this->lastName = $lastName;
    }

    public function setDateOfBirth($dateOfBirth): void {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setAddress($address): void {
        $this->address = $address;
    }
}
?>
