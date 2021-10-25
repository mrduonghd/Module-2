<?php
include_once "Information.php";

$a = new Information('StudentManager');
// echo "<pre>";
$students = $a->getAll('students');
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
    <table>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Class</th>
            <th>Age</th>
        </tr>
        <?php foreach($students as $key => $student) :?>
            <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $student['Name'] ?></td>
                <td><?php echo $student['Class'] ?></td>
                <td><?php echo $student['Age'] ?></td>
            </tr>
            
        <?php endForEach ?>    
    </table>
</body>
</html>