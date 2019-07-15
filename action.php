<?php
include('db.php');

$query = "SELECT * FROM tb_user_220_orders;";
$result = mysqli_query($connection, $query);
if(!$result){
    die("DB Action query failed.");
}

if (isset($_POST['ttl']))
{
    $ttle = mysqli_real_escape_string($connection, $_POST['ttl']);
    $des1 = mysqli_real_escape_string($connection, $_POST['desc1']);
    $des2 = mysqli_real_escape_string($connection, $_POST['desc2']);
    $des3 = mysqli_real_escape_string($connection, $_POST['desc3']);
    $userId = mysqli_real_escape_string($connection, $_POST["user_id"]);

    $query11 = "INSERT INTO tb_user_220_orders (user_id, drink_name, first_base, second_base, alcohol, special, price) values ( '$userId','$ttle','$des2','$des1','$des3','Yes', '45');";
   echo($query11);
    $result11 = mysqli_query($connection, $query11);
}

mysqli_free_result($result);
mysqli_close($connection);

?>