<?php
include('db.php');

$query = "SELECT * FROM tb_user_220_events;";
$result = mysqli_query($connection, $query);
if(!$result){
    die("DB ActionEvent query failed.");
}

if (isset($_POST['eName']))
{
    $event_name = mysqli_real_escape_string($connection, $_POST['eName']);
    $event_place = mysqli_real_escape_string($connection, $_POST['ePlace']);
    $event_date = mysqli_real_escape_string($connection, $_POST['eDate']);
    $userId = mysqli_real_escape_string($connection, $_POST["user_id"]);

    $query11 = "INSERT INTO tb_user_220_events (user_id, e_name, e_date, e_place) values ( '$userId','$event_name','$event_date','$event_place');";
   echo($query11);
    $result11 = mysqli_query($connection, $query11);
}

mysqli_free_result($result);
mysqli_close($connection);

?>