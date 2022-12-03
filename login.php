<?php
include 'conn.php';
$username=$_POST['username'];
$pass=$_POST['password'];
$db_username='';
$db_pass = '';
if(!empty($username) && !empty($pass)){
    $sql = "SELECT * FROM authenticate WHERE auth_username='$username' AND auth_pass='$pass'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $db_pass=$row['auth_pass'];
            $db_username=$row['auth_username'];
        }
        if($username==$db_username && $pass==$db_pass){
            $_SESSION['status']="Login Successfully.";
            $_SESSION['status_code']="success";
            $_SESSION['username']=$db_username;
            header('Location:home.php');
        }
        else{
            $_SESSION['status']="Invalid Admin.";
            $_SESSION['status_code']="error";
            header('Location:index.php');
        }
    }
    else{
        $_SESSION['status']="Username and Password does not matched.";
        $_SESSION['status_code']="error";
        header('Location:index.php');
    }
}else{
    $_SESSION['status']="Plese Enter Username and Password.";
    $_SESSION['status_code']="error";
    header('Location:index.php');
}
?>