
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task_03</title>
</head>
<body>
<form method="post" action="index.php">
    <label for="change">Введіть номер місяця:</label>
    <input type="number" id="change" name="change" required>
    <button  type="submit" >Жмяк</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$month = $_POST['change'];
if ($month >= 3 && $month <= 5) {
    $season = "весна";
} elseif ($month >= 6 && $month <= 8) {
    $season = "літо";
} elseif ($month >= 9 && $month <= 11) {
    $season = "осінь";
} else {
    $season = "зима";
}
echo "Сезон пори року за номером місяця $month - $season";
}
?>
</body>
</html>
