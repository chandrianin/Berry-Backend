<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
    <style>
        body {
            background: #608876;
            font-size: 23px;
            font-family: "Comic Sans MS", serif;
        }
    </style>
</head>
<body>
<form action="save.php" method="post"> ~OnlyAdmin~
    <label>
        <br> Введите дату:
        <input name="date" required type="date" placeholder="day/month/year">
    </label>
    <label>
        <br> Сколько раз необходимо зарядиться:
        <input name="charging" required type="charging" placeholder="0">
    </label>
    <label>
        <br> Сколько раз необходимо поиграть:
        <input name="ball" required type="ball" placeholder="0">
    </label>
    <label>
        <br> <input type="submit">
    </label>
</form>
<?php // база данных, с ней потом
$container = 'db';
$useruser = 'root';
$password = 'itsaBASE';
$database = 'BASE';
$port = 3306;

$babyBASE = new mysqli($container, $useruser, $password, $database, $port);

foreach ($babyBASE->query("SELECT * FROM BASE.ad") as $row) {
    $category = $row['category'];
    $title = $row['title'];
    $description = $row['description'];
    $email = $row['email'];
    echo "<p> $email -> $title -> $description -> $category </p>";
}
//for ($i = 1; $i < sizeof($response->getValues()); $i++) {
//    $valuesInRow = array();
//    echo "<p>";
//    for ($j = 0; $j < 2; $j++) {
//        if ($j < sizeof($response->getValues()[$i])) {
//            echo  $response->getValues()[$i][$j]." ->  ";
//        } else {
//            echo "   ";
//        }
//    }
//    if (2 < sizeof($response->getValues()[$i])) {
//        echo $response->getValues()[$i][2];
//    }
//    echo "</p>";
//}
?>
</body>
</html>
