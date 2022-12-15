<?php
$std_id = $_GET['std_id'];
$std_name= $_GET['std_name'];
$std_sname = $_GET['std_sname'];
require "condb.php";

try {
    $sql = " INSERT INTO tb_student 
    VALUES('std_id','std_name','std_sname')"; 
    $result = mysqli_query($link,$sql);
    echo "Delete successful !!";

}catch (Exception $e){
    echo $e . "Error no : " . mysqli_error($link);
}
