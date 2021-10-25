<?php
include_once "employee.php";
include_once "function.php";
// include_once "createemployee.php"

$employees = convertData();
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
    <a href="createemployee.php"><button>Add Employee</button></a>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>NAME</th>
                <th>AGE</th>
                <th>PHONE</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($employees as $key => $employee) : ?>
            <tr>
                <td><?php echo $key +1 ?></td>
                <td><?php echo $employee->getName() ?></td>
                <td><?php echo $employee->getAge() ?></td>
                <td><?php echo $employee->getPhone() ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>1
</body>
</html>