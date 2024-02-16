
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task_02</title>
</head>
<body>
<form method="post" action="index.php">
    <label for="change">Введіть кількість гривень:</label><br>
    <input type="number" id="change" name="change" required>
    <button  type="submit" >Перевести</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grn = $_POST['change'];
    $kurs = 38;
    $dollars = round($grn / $kurs, 2);
    echo "{$grn} грн. можна обміняти на {$dollars} доларів";
}
?>
</body>
</html>
