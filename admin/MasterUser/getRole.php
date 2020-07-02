<?php
    $id = $_GET['id'];
    
    require_once "../../config/connection.php";
    $query = mysqli_query($conn,"SELECT * FROM role where Id=$id");
    echo json_encode($query->fetch_assoc());
?>