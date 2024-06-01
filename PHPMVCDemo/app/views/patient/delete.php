<?php 
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost','root','','qltl');
    $sql = "DELETE FROM `qltl`.`tailieuql` WHERE  `id`= $id;";
    $conn->query($sql);
    if($conn) {
        echo "SUCCESS";
    }else {
        echo "FAIL";
    }
?>