<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cnn_master"; 
    $conn = new mysqli($host,$user,$pass,$db);
    if(!$conn)
    {
        echo "<script>
            alert('Cannot connect to database');
        </script>";    

    }
        
    
    
?>