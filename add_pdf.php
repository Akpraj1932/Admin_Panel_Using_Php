<?php
include 'conn.php';
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    return false;
    exit();
}
$type = '1';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Academic Calender </title>
    <?php include 'include-css.php'; ?>
    <style>
    div.list {
        background-color: #fed9ff;

        height: 400px;
        overflow-x: auto;
        overflow-y: auto;
        text-align: center;
        padding: 20px;
    }
    th{
        text-align:center;
    }
    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php include 'sidebar.php'; ?>
            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <br />
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add Academic Calender</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class='row'>
                                    <div class='col-md-12 col-sm-12'>
                                        <form action="add_academic_code.php" method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" value="pdf_calender"
                                                name="pdf_calender" />
                                           
                                                <div class="col-md-6 col-sm-12">
                                                    <label for="name">State</label>
                                                    <select name="state" required class="form-control">
                                                        <option>Select State</option>
                                                        <?php
                                                    $sql="SELECT * FROM state";
                                                    $result= mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            
                                                            
                                                        ?>
                                                        <option><?php echo $row['state_name'];?></option>
                                                        <?php     }?>
                                                        <?php }?>

                                                    </select>
                                                </div>
                                               
                                                <div class="col-md-6 col-sm-12">
                                                    <label for="image">Image</label>
                                                    <input type='file' name="image" id="image" class="form-control">
                                                </div>
                                                <hr>
                                                <div class="form-group mx-5">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <button type="submit" id="submit_btn"
                                                            class="btn btn-success">Add
                                                        </button>
                                                    </div>
                                                </div>
                                        </form>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2>List Of Pdf</h2>
                                    </div>
                                    <div class='col-md-12 col-sm-12 list table table-striped'>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    
                                                    <th scope="col">State</th>
                                                    
                                                    <th scope="col">Pdf</th>
                                                    <th scope="col">Operation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql="SELECT * FROM calenderpdf";
                                                $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)>0){
                                                    while($row=mysqli_fetch_assoc($result)){
                                                        ?>
                                                <tr>
                                                    <td><?php echo $row['state'];?></td>
                                                    <td><?php echo "pdf/".$row['pdf'];?></td>
                                                    <td><a
                                                            href="delete.php?action=pdf_delete&id=<?php echo $row['id'];?>"><span
                                                                style="color:red;"><b>Delete</b></span></td>
                                                </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include 'footer.php'; ?>
        <!-- /footer content -->
    </div>

    <?php
      if(isset($_SESSION['status']) && $_SESSION['status']!=''){
        ?>
    <script>
    swal({
        title: "<?php echo $_SESSION['status'];?>",
        icon: "<?php echo $_SESSION['status_code'];?>",
    });
    </script>
    <?php
        unset($_SESSION['status']);
      }
      ?>

    <script>
    $("#datepicker").datepicker({
        dateFormat: 'yy-mm-dd'
    });
    </script>
</body>

</html>