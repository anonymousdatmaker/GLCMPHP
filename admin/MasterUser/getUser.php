<?php
    $id = $_GET['id'];
    
    require_once "../../config/connection.php";
    $query = mysqli_query($conn,"SELECT * FROM user where Id=$id");
    echo json_encode($query->fetch_assoc());
?>