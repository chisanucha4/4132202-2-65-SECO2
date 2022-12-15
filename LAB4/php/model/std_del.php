<?php
$id = $_GET['id'];

require "condb.php";

try {
    $sql = "DELETE FROM tb_student WHERE std_id = '$id'";
    $result = mysqli_query($link,$sql);
    echo "Delete successful !!";
}catch(Exception $e){
    echo $e . "error no :" . mysqli_errno($link);
}

?>