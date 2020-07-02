<?php
    session_start();
    if(!$_SESSION['status']){
        echo "<script>
            window.location.href='../login.php';
            </script>";
    }


    require_once "../config/connection.php";        
    require_once "header.php";
    require_once "navbar.php";

        $page = $_GET['page'];
        switch($page){
            case "dashboard":
                require_once "main.php";
            break;
            case "user":
                require_once "MasterUser/user.php";
            break;
            case "editUser":
                    require_once "MasterUser/editUser.php";
            break;
            case "role":
                require_once "MasterUser/role.php";
            break;
            case "editRole":
                    require_once "MasterUser/editRole.php";
            break;
            case "userRole":
                require_once "MasterUser/userRole.php";
            break;
            case "dataLatih":
                require_once "MasterData/dataLatih.php";
            break;
            case "dataUji":
                require_once "MasterData/dataUji.php";
            break;
            case "akurasi":
                require_once "Pengujian/akurasi.php";
            break;
            
            }
    
    require_once "footer.php";



?>




      
