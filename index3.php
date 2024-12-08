<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
        $students = [
            "Ali" => 85,
            "Fatimah" => 92,
            "John" => 74,
            "Sara" => 88
        ];
    ?>
    <table border="1">
        <tr><th>Student</th><th>Marks</th></tr>
        <?php foreach ($students as $name => $marks): ?>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $marks; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
