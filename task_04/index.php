
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task_04</title>
</head>
<body>
<form method="post" action="index.php">
    <label for="change">Введіть букву:</label>
    <input type="text" id="change" name="change" required>
    <button  type="submit" >Жмяк</button>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$char = $_POST['change'];
if(mb_strlen($char,'UTF-8')>1){
    echo "Введіть 1 букву";

}else {
    switch ($char) {
        case 'а':
        case 'е':
        case 'и':
        case 'і':
        case 'о':
        case 'у':
        case 'є':
        case 'ї':
        case 'ю':
        case 'я':
            $type = "голосний";
            break;
        default:
            $type = "приголосний";
    }
    echo "Символ $char - $type";
}
}
?>
</body>
</html>
