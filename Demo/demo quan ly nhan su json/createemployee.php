<?php 
include_once "employee.php";
include_once "function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="All Name">
        <input type="number" name="age" placeholder="Age">
        <input type="number" name="phone" placeholder="Phone number">
        <button type="submit"> ADD </button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $employee = new Employee($name,$age,$phone);
    // convertData();
    addEmployee($employee);
    saveData($employee);
    var_dump($employee);
    header("location:index.php");
}
?>