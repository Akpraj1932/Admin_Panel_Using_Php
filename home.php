<?php
session_start();
$_SESSION['username']=$_SESSION['username'];
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    return false;
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home |Academic Calender</title>
        <?php include 'include-css.php'; ?>
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
                        <div role="main">
                            <!-- top tiles -->
                            <h1 style="color:black;font-size:29px;text-align:center;">Welcome to Academic Calender</h1>
                            <hr>
                            <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><em class="fas fa-user-friends"></em>
                                    </div>
                                    <div class="count"></div>
                                    <h3>Total Categories</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><em class="fas fa-users"></em>
                                    </div>
                                    <div class="count"></div>
                                    <h3>Total Sub Categories</h3>
                                </div>
                            </div>
                             <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><em class="fas fa-users"></em>
                                    </div>
                                    <div class="count"></div>
                                    <h3>Total Sub 2 Categories</h3>
                                </div>
                            </div>
                             <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><em class="fas fa-users"></em>
                                    </div>
                                    <div class="count"></div>
                                    <h3>Total Sub 3 Categories</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><em class="far fa-question-circle"></em>
                                    </div>
                                    <div class="count"></div>
                                    <h3>Total Questions</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><em class="fas fa-recycle"></em>
                                    </div>
                                    <div class="count"></div>
                                    <h3>Registered Devices</h3>
                                </div>
                            </div>
                            <!-- /top tiles -->
                        </div>
                    </div>
                    <div class="row">
                        <div role="main">
                            
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                   
                                    <div class="tile-stats" style="padding:10px 5px 10px 10px;">
                                        <div id="columnchart_material" style="width:100%;height:350px;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                
                                    <div class="tile-stats" style="padding:10px 5px 10px 10px;">
                                        <div id="columnchart_material_2" style="width:100%;height:350px;"></div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'footer.php'; ?>
        </div>
        <!-- jQuery -->
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
    </body>
</html>