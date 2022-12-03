<?php
include 'conn.php';
if($_POST['academic_calender']=='academic_calender'){
    $date=date('Y-m-d',strtotime($_POST['date']));
    $title=$_POST['title'];
    $state = $_POST['state'];
    $month=$_POST['month'];
    $description=$_POST['description'];
    $filename='';
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "academic_image/".$filename;
    $sql="INSERT INTO  academic(`date`,`title`,`state`,`month`,`description`,`image`) VALUES('$date','$title','$state','$month','$description','$filename')";
    $result=mysqli_query($conn,$sql);
    if($result){
        move_uploaded_file($tempname,$folder);
        $_SESSION['status']="Academic Calender Add Successfully.";
        $_SESSION['status_code']="success";
        header('Location:add_academic.php');
    }
    else{
        $_SESSION['status']="Academic Calender Not Add Successfully.";
        $_SESSION['status_code']="error";
        header('Location:add_academic.php');
    }

}
if($_POST['government_calender']=='government_calender'){
    $date=date('Y-m-d',strtotime($_POST['date']));
    $title=$_POST['title'];
    $state = $_POST['state'];
    $month=$_POST['month'];
    $description=$_POST['description'];
    $filename='';
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "government_image/".$filename;
    $sql="INSERT INTO  government(`date`,`title`,`state`,`month`,`description`,`image`) VALUES('$date','$title','$state','$month','$description','$filename')";
    $result=mysqli_query($conn,$sql);
    if($result){
        move_uploaded_file($tempname,$folder);
        $_SESSION['status']="Government Calender Add Successfully.";
        $_SESSION['status_code']="success";
        header('Location:add_government.php');
    }
    else{
        $_SESSION['status']="Government Calender Not Add Successfully.";
        $_SESSION['status_code']="error";
        header('Location:add_government.php');
    }  
}
if($_POST['pdf_calender']=='pdf_calender'){
    $state = $_POST['state'];
    $filename='';
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "pdf/".$filename;
    $sql="INSERT INTO calenderpdf(`state`,`pdf`) VALUE ('$state','$filename')";
    $result = mysqli_query($conn,$sql);
    if($result){
        move_uploaded_file($tempname,$folder);
        $_SESSION['status']="Pdf Calender Add Successfully.";
        $_SESSION['status_code']="success";
        header('Location:add_pdf.php');
    }
    else{
        $_SESSION['status']="Pdf Calender Not Add Successfully.";
        $_SESSION['status_code']="error";
        header('Location:add_pdf.php');
    }
}
?>