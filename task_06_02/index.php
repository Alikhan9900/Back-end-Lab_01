
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task_06_02</title>
</head>
<body>
<div >
    <form method="post" action="../task_06_02/index.php">
        <label for="change">Введіть кількість квадратів:</label>
        <input type="number" id="change" name="change" required>
        <button  type="submit" >Жмяк</button>
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        function printSquares($n) {
            $colors = ['red'];

            for ($i = 1; $i <= $n; $i++) {
                $size = mt_rand(50, 200);
                $top = mt_rand(0, 500);
                $left = mt_rand(0, 1000);
                $color = $colors[array_rand($colors)];
                echo "<div style='position: absolute; top: {$top}px; left: {$left}px; width: {$size}px; height: {$size}px; background-color: $color;'></div>";
            }
        }

        printSquares($_POST['change']);
    }
    ?></div>
</body>
</html>

