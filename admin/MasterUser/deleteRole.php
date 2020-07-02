<?php
    $id = $_GET['id'];
    
    require_once "../../config/connection.php";
    $query = mysqli_query($conn,"DELETE  FROM role where Id=$id");
    $obj = new stdClass();
    $obj->status = "Success";
    echo json_encode($obj);
?>