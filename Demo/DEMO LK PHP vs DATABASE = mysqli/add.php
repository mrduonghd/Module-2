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
        <input type="text" name="studentName">
        <input type="text" name="class">
        <input type="text" name="age">
        <button type="submit">SUBMIT</button>
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['studentName'];
    $class = $_POST['class'];
    $age = $_POST['age'];

    $conn = new mysqli('localhost', 'root', 'Mr@duonghd1','StudentManager');

    $sql = "INSERT INTO students(Name,Class,Age) VALUES ('$name','$class','$age')";
    $result = $conn->query($sql);

    if($result){
        echo "da them thanh cong";
    }else{
        echo "them that bai";
    }

    $conn->close();
    header('location:index.php');
}
