<!DOCTYPE html>
<html>
    <body>
   <h1>EmployeeManager</h1>
     <form method = "post"> 
      <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <label for="dob">Date Of Birth:</label><br>
        <input type="text" id="dob" name="dob"><br>
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>
        <label for="position">Job Position :</label><br>
        <input type="text" id="position" name="position"><br>
        <label for="salary">Salary :</label><br>
        <input type="text" id="salary" name="salary"><br>
        <button name = "action" value = "add">Add Employee </button>
        <button name = "action" value = "list"> View Employee List</button>
    </form>
    <?php
    require_once 'EmployeeManager.php';
    $manager = new EmployeeManager();
    $manager->loadFromFile();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $action = $_POST["action"];
        if($action == "add" ){
           $employee = new Employee((count($manager->employees)+1),
           ($_POST["fname"]),
           ($_POST["lname"]),
        ($_POST["dob"]),
            ($_POST["address"]),
        ($_POST["position"]),
                $_POST["salary"]);
            $manager->saveToFile();
            $manager->addEmployee($employee);
            echo "Employee add successfully";
        }elseif($action == "list"){
            echo "<h2>Employee list: </h2>";
            $manager->displayEmployeeList();
        }
    }
        elseif($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["action"]) && $_GET["action"] == "view" && isset($_GET["id"])){
            echo "<h2>Employee details: </h2>";
            $id = $_GET["id"];
            $manager->getEmployeeDetail($id);
    }
    ?>
    </body>
</html>