<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function multiplication($multiplier) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = [
                    'No' => $i,
                    'Multiplier' => $multiplier,
                    'Answer' => $i * $multiplier
                ];
            }
            return $results;
        }
        $multiplier = 5; // Example multiplier
        $table = multiplication($multiplier);
    ?>
    <table border="1">
        <tr><th>No</th><th>Multiplier</th><th>Answer</th></tr>
        <?php foreach ($table as $row): ?>
        <tr>
            <td><?php echo $row['No']; ?></td>
            <td><?php echo $row['Multiplier']; ?></td>
            <td><?php echo $row['Answer']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
