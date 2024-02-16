
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task_06</title>
</head>
<body>
<div>
<form method="post" action="index.php">
    <label for="row">Введіть кількість рядків:</label>
    <input type="number" id="row" name="row" required>
    <br>
    <label for="col">Введіть кількість столбців:</label>
    <input type="number" id="col" name="col" required>
    <br>
    <button  type="submit" >Жмяк</button>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
function printTable($rows, $columns) {
    echo "<table style='width: 250px;height: 250px;'>";
    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $columns; $j++) {
            $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            echo "<td style='background-color: $color;'></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
printTable($_POST['row'], $_POST['col']);
}
?>
</div>

</body>
</html>

