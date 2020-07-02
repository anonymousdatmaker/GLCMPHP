<?php
    require_once "../../config/connection.php";
    $id = $_POST['id'];
    $name = $_POST['name'];
   
    if($id==""){
        $query = "INSERT INTO role(Name,CreatedBy,CreatedAt,IsActive,IsDeleted) VALUES('$name','System','now()','1','0')";
        $execute = mysqli_query($conn,$query);
        if($execute){
            $obj = new stdClass();
            $obj->status ="Success";
            $json = json_encode($obj); 
            echo $json;
        }
    }
    else{
        $query = "UPDATE role SET Name = '$name',UpdateBy='System',UpdateAt='now()' WHERE Id='$id'";
        $execute = mysqli_query($conn,$query);
        if($execute){
            $obj = new stdClass();
            $obj->status ="Success";
            $json = json_encode($obj); 
            echo $json;
        }
    }
    
    
    

?>