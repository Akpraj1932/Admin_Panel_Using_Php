<?php
include 'conn.php';
if($_GET['action']=='delete'){
    $id=$_GET['id'];
    $sql="DELETE FROM academic where id='$id'";
    if(mysqli_query($conn,$sql)){
        $_SESSION['status']="Academic Calender Deleted Successully.";
        $_SESSION['status_code']="success";
        header('Location:add_academic.php');
    }
    else{
        $_SESSION['status']="Academic Calender Not Deleted Successully.";
        $_SESSION['status_code']="error";
        header('Location:add_academic.php');
    }
}
if($_GET['action']=='gov_delete'){
    $id=$_GET['id'];
    $sql="DELETE FROM government where id='$id'";
    if(mysqli_query($conn,$sql)){
        $_SESSION['status']="Government Calender Deleted Successully.";
        $_SESSION['status_code']="success";
        header('Location:add_government.php');
    }
    else{
        $_SESSION['status']="Government Calender Not Deleted Successully.";
        $_SESSION['status_code']="error";
        header('Location:add_government.php');
    }
}
if($_GET['action']=='pdf_delete'){
    $id=$_GET['id'];
    $sql="DELETE FROM calenderpdf where id='$id'";
    if(mysqli_query($conn,$sql)){
        $_SESSION['status']="Pdf Calender Deleted Successully.";
        $_SESSION['status_code']="success";
        header('Location:add_pdf.php');
    }
    else{
        $_SESSION['status']="Pdf Calender Not Deleted Successully.";
        $_SESSION['status_code']="error";
        header('Location:add_pdf.php');
    }
}
?>