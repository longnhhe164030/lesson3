<?php
require_once 'Employee.php';
class EmployeeManager{
public array $employees = [];
private string $file = 'employee.json';
public function addEmployee(Employee $employee){
    array_push($this->employees, $employee);
        $this->saveToFile();
    }

    public function displayEmployeeList(){
        foreach($this->employees as $index => $employee){
            echo ($index + 1). ". " . $employee->getFirstName() ." ". $employee->getLastName(). "-". $employee->getJobPosition() . "<br>";
            echo "<a href='?action=view&id=" . $employee->getId() . "'>Veiw Detail</a><br>";
        }
    }

    public function getEmployeeDetail($id){
       $this->loadFromFile();
       foreach($this->employees as $employee){
        if($employee->getId() == $id){
            echo"Full name: ". $employee->getFirstName() ." ". $employee->getLastName()."<br>";
            echo"Date of birth: " . $employee->getDateOfBirth()."<br>";
            echo "Address: " . $employee->getAddress()."<br>";
            echo "Job Position: ". $employee->getJobPosition()."<br>";
            echo "Salary: " . $employee->getSalary()."$<br>";
        }
    }

    }

    public function saveToFile(){
        if(file_exists($this->file)){
            $data = array_map(fn($employee)=>$employee->toArray(),$this->employees);
            file_put_contents($this->file,json_encode($data,JSON_PRETTY_PRINT));
        }   
    }

    public function loadFromFile(){
        if(file_exists($this->file)){
            $data = json_decode(file_get_contents($this->file),true);
            $this->employees = array_map(fn($item)=>Employee :: fromArray($item),$data);
        }
    }
}
?>