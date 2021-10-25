<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="add.php">ADD</a>
    <table border="1px">
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td>Class</td>
            <td>Age</td>
        </tr>

        <?php
        $conn = new mysqli("localhost", "root", "Mr@duonghd1", "StudentManager");
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

        $stt = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$stt++."</td>
                <td>".$row['Name']."</td>
                <td>".$row['Class']."</td>
                <td>".$row['Age']."</td></tr>";
        }
        ?>


    </table>
</body>

</html>