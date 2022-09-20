<?php
$code_id    =   $_GET['code_id'];
$conn       =   mysqli_connect('localhost','root','','allsaint');
$delete     =   "DELETE FROM confirmation WHERE id = '$code_id'";
$query      =   $conn->query($delete);
header('Location:activation_list.php');


?>