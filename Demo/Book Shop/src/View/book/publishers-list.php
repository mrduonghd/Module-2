
<body>
    <table>

        <tr>
            <th>Publisher-Id</th>
            <th>Publisher-Name</th>
            <th>Publisher-Address</th>
            <th>Publisher-Email</th>
        </tr>
        <?php foreach ($publishers as $key => $publisher): ?>
        <tr>
            <td><?php echo $publisher['publisher_id']?></td>
            <td><?php echo $publisher['publisher_name']?></td>
            <td><?php echo $publisher['publisher_address']?></td>
            <td><?php echo $publisher['publisher_email']?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
