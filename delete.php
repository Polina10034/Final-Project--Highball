
<?php
include('db.php');

$query = "SELECT * FROM tb_user_220_events;";
$result = mysqli_query($connection, $query);
if(!$result){
    die("DB delete query failed.");
}

if (isset($_POST['name']))
{
    $eventN = mysqli_real_escape_string($connection, $_POST['name']);
    $query="DELETE from tb_user_220_events WHERE e_name='$eventN'";
   
    echo($query);
    $result11 = mysqli_query($connection, $query);
}

mysqli_free_result($result);
mysqli_close($connection);

?>