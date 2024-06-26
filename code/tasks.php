<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/favicon.ico">
    <title>Tasks</title>
    <style>
        * {
            font-family: "Comic Sans MS", serif;
        }
        body {
            width: 100%;
            margin: 0;
            padding: 0;
            background: #608876;
            font-size: 23px;
        }
        body div {
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: flex-start;
            align-items: center;
        }
        div label {
            width: 570px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: stretch;
        }
        input {
            padding-right: 5px;
            padding-left: 5px;
            font-size: 18px;
            height: 30px;
            border: none;
            width: 120px;
            border-radius: 13px;
        }
        img {
            position: fixed;
            height: 425px;
            right: 0;
        }
    </style>
</head>
<body>
<div>
    <h2>OnlyAdmins</h2>
    <form action="save.php" method="post">
        <br>
        <label>
            Введите дату:
            <input name="date" required type="date" placeholder="day/month/year">
        </label>
        <br>
        <label>
            Сколько раз необходимо зарядиться:
            <input name="charging" required type="number" placeholder="0">
        </label>
        <br>
        <label>
            Сколько раз необходимо поиграть:
            <input name="ball" required type="int" placeholder="0">
        </label>
        <br>
        <label>
            <input type="submit" style="margin-right: auto; margin-left: auto">
        </label>
    </form>
</div>
<img alt="berry" src="images/bigBerry.svg">
<?php //// база данных, с ней потом
//$container = 'db';
//$useruser = 'root';
//$password = 'itsaBASE';
//$database = 'BASE';
//$port = 3306;
//
//$babyBASE = new mysqli($container, $useruser, $password, $database, $port);
//
//foreach ($babyBASE->query("SELECT * FROM BASE.ad") as $row) {
//    $category = $row['category'];
//    $title = $row['title'];
//    $description = $row['description'];
//    $email = $row['email'];
//    echo "<p> $email -> $title -> $description -> $category </p>";
//}
////for ($i = 1; $i < sizeof($response->getValues()); $i++) {
////    $valuesInRow = array();
////    echo "<p>";
////    for ($j = 0; $j < 2; $j++) {
////        if ($j < sizeof($response->getValues()[$i])) {
////            echo  $response->getValues()[$i][$j]." ->  ";
////        } else {
////            echo "   ";
////        }
////    }
////    if (2 < sizeof($response->getValues()[$i])) {
////        echo $response->getValues()[$i][2];
////    }
////    echo "</p>";
////}
//?>
</body>
</html>
