<?php
$container = 'db';
$useruser = 'root';
$password = 'itsaBASE';
$database = 'BASE';
$port = 3306;

$babyBASE = new mysqli($container, $useruser, $password, $database, $port);

if(isset( $_GET['id'] ) && empty( $_GET['id'] ))
{
    $stmt = $babyBASE->prepare("INSERT INTO  BASE.storyDays (storyDayNumber, lastRequestDay)VALUES (?, ?)");
    $today = date("Y-m-d");
    $story = 1;
    $stmt->bind_param("is",$story, $today);
    $stmt->execute();

    $getID = "SELECT ID from BASE.storyDays ORDER BY ID DESC LIMIT 1;";
    $result = $babyBASE->query($getID);
    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row["ID"];
        }
    }
}
else
{
    $today = date("Y-m-d");
    $ID = $_GET['id'];
    $getInfo = "SELECT * from BASE.storyDays";
    if($result = $babyBASE->query($getInfo))
    {
        foreach($result as $row)
        {
            if ($ID == $row['id']) {
                if ($today != $row['lastRequestDay']) {
                    $sql = $babyBASE->prepare("UPDATE BASE.storyDays
                    SET lastRequestDay = ?, storyDayNumber = storyDayNumber + 1
                    WHERE ID=?");
                    $sql->bind_param("si", $today, $ID);
                    $sql->execute();
                }
                echo $row['storyDayNumber'] . "<br>";
            }
        }
    }

    $getTasks = "SELECT * from BASE.tasks";
    $result = $babyBASE->query($getTasks);
    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row["chargeCount"] . "<br>";
            echo $row["ballKickCount"] . "<br>";
        }
    }
}