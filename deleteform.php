<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost", "u159462725_pets_user", "Pets_123456#", "u159462725_pets_db");
$sql = "DELETE FROM `pdfs` WHERE `id`='$id'";
$result = mysqli_query($con, $sql);
if($result)
{
    header("location: uforms.php");
}

?>