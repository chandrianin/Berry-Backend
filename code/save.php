<?php
function redirectToHome()
{
    header('Location: /tasks.php');
    exit();
}
if (false === isset($_POST['date'], $_POST['charging'], $_POST['ball'])){
    redirectToHome();
}
$container = 'db';
$useruser = 'root';
$password = 'itsaBASE';
$database = 'BASE';
$port = 3306;

$babyBASE = new mysqli($container, $useruser, $password, $database, $port);
$date = $_POST['date'];
$charging = $_POST['charging'];
$ball = $_POST['ball'];

$stmt = $babyBASE->prepare("INSERT INTO BASE.tasks (day, chargeCount, ballKickCount) VALUES (?, ?, ?)");
$stmt->bind_param("sii",$date, $charging, $ball);
$stmt->execute();

$stmt->close();
$babyBASE->close();
redirectToHome();