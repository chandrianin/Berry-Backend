<?php
$container = 'db';
$useruser = 'root';
$password = 'itsaBASE';
$database = 'BASE';
$port = 3306;

$babyBASE = new mysqli($container, $useruser, $password, $database, $port);

if(empty($_GET['ID']))
{
    $stmt = $babyBASE->prepare("INSERT INTO (storyDayNumber, lastRequestDay) BASE.storyDays VALUES (?, ?)");
    $today = date("m.d.y");
    $story = 1;
    $stmt->bind_param("is",$story,  $today);
    $stmt->execute();

    $getID = "SELECT ID from BASE.storyDays";
    if($result = $babyBASE->query($getID))
    {
        $rowsCount = $result->num_rows;
        echo $result[$rowsCount];
    }
}
else
{
    $today = date("m.d.y");
    $ID = $_GET['ID'];
    $getID = "SELECT * from BASE.storyDays";

    if($result = $babyBASE->query($getID))
    {
        $rowsCount = $result->num_rows;
        echo $result[$rowsCount];
        foreach($result as $row)
        {
            if ($ID == $row['ID'])
            {
                if ($today != $row['lastRequestDay'])
                {
                    $sql = $babyBASE->prepare("UPDATE BASE.storyDays;
                    SET lastRequestDay = $today, storyDayNumber = storyDayNumber + 1;
                    WHERE ID=$ID");
                    $sql->execute();
                }
                echo $row['storyDayNumber'];

                $getTasks = "SELECT * from BASE.tasks";
                if($dayTasks = $babyBASE->query($getTasks))
                {
                    foreach($dayTasks as $dayTask)
                    {
                        if ($today == $dayTask['day'])
                        {
                            echo $dayTask['chargeCount'];
                            echo $dayTask['ballKickCount'];
                        }
                    }
                }
            }
        }
    }
}