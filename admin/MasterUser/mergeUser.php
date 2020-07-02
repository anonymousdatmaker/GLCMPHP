<?php
    require_once "../../config/connection.php";
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if($id==""){
        $query = "INSERT INTO user(Username,Name,Email,Password,IdRole,CreatedBy,CreatedAt,IsActive,IsDeleted) VALUES('$username','$username','$email','$password','2','System','now()','1','0')";
        $execute = mysqli_query($conn,$query);
        if($execute){
            $obj = new stdClass();
            $obj->status ="Success";
            $json = json_encode($obj); 
            echo $json;
        }
    }
    else{
        $query = "UPDATE user SET Username = '$username',Name= '$username',Email='$email',Password='$password',UpdateBy='System',UpdateAt='now()' WHERE Id='$id'";
        $execute = mysqli_query($conn,$query);
        if($execute){
            $obj = new stdClass();
            $obj->status ="Success";
            $json = json_encode($obj); 
            echo $json;
        }
    }
    
    
    

?>