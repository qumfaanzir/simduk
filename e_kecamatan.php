<!DOCTYPE html>
<?php 
include 'koneksi.php';
?>
<?php
$id=mysql_real_escape_string($_GET['id']);
$det=mysql_query("select * from kecamatan where id_kecamatan='$id'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>      
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Joli Admin - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
                        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                  
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <?php include "menu.php" ;?>
            <!-- END PAGE SIDEBAR -->
            <?php
$timeout = 10; // Set timeout minutes
$logout_redirect_url = "index.php"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>            <!-- PAGE CONTENT -->
            <div class="page-content">
                
               <!-- START X-NAVIGATION VERTICAL -->
                <?php include "navbar.php"; ?>                  
                <!-- END X-NAVIGATION VERTICAL -->       
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" action="p_e_kecamatan.php" >
                            <input type="hidden" name="id_kecamatan" value="<?php echo $d['id_kecamatan'] ?>">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit</strong> Kabupaten</h3>
                                    <ul class="panel-controls">
                                        
                                    </ul>
                                </div>
                                <div class="panel-body">
                                </div>
                                <div class="panel-body form-group-separated">
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama Kecamatan</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="nama_kecamatan" id="nama_kecamatan"
                                                value="<?php echo $d['nama_kecamatan'] ?>" />
                                            </div>                                            
                                            <span class="help-block">Isi Nama Kecamatan Disini</span>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Jumlah Desa</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="jumlah_desa" id="jumlah_desa"  value="<?php echo $d['jumlah_desa'] ?>"/>
                                            </div>                                            
                                            <span class="help-block">Isi Jumlah Desa Disini</span>
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Kabupaten</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="id_kab">
                                                <option>Pilih Kabupaten</option>
                                                    <?php
                                                    $cat_query = mysql_query("select * from kabupaten");
                                                    while($cat_row = mysql_fetch_array($cat_query)){
                                                    ?>
                                <option value="<?php echo $cat_row['id_kabupaten']; ?>"><?php echo $cat_row['nama_kabupaten']; ?></option>
                                                     <?php  } ?>
                                            </select>
                                            <span class="help-block">Pilih Kabupaten Disini</span>
                                        </div>
                                    </div>
                                   

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->             
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->       
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>

  <?php 
}
?>




