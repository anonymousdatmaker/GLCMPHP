
<?php
    require_once "config/connection.php";
    session_start();
    if(isset($_POST['submit'])){
       $username = $_POST['email'];
       $password = $_POST['password'];
       $sql = "SELECT * FROM user WHERE Email='".$username."'";
       $query = $conn->query($sql);
       $result = mysqli_fetch_assoc($query);
       if($result["IdRole"] == 1){
           $_SESSION['user'] = $result["Username"];
           $_SESSION['status'] = true;
           echo "<script>
            alert('Login Successfully');
                window.location.href='admin/index.php?page=dashboard';
           </script>";
       }else{
           $_SESSION['msg'] = "Username or Password not found";
           $_SESSION['status'] = false;
            echo "<script>
            alert('Login Failed');
                window.location.href='admin/index.php';
        </script>";
       }
       
    }

?>