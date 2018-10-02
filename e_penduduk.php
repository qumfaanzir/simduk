<!DOCTYPE html>
<?php 
include 'koneksi.php';
?>
<?php
$id=mysql_real_escape_string($_GET['id']);
$det=mysql_query("select * from penduduk where id_pen='$id'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>      
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>SimDuk Riau</title>            
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
                            
                            <form class="form-horizontal" method="post" action="p_t_penduduk.php" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit</strong> Penduduk</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <p>Isilah Biodata Ini Dengan Benar.</p>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                     <div class="form-group">
                                                <label class="col-md-3 control-label">NIK</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="nik" value="<?php echo $d['nik'] ?>" />
                                                    </div>                                            
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Nama</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>" />
                                                    </div>                                            
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>
                                               <div class="form-group">
                                                <label class="col-md-3 control-label">Tempat Lahir</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $d['tempat_lahir'] ?>" />
                                                    </div>                                            
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>
                                              <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Tanggal Lahir</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" name="tanggal_lahir" value="07-07-2014" id="dp-4" data-date="07-07-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="months" value="<?php echo $d['tanggal_lahir'] ?>">                                            
                                                    </div>
                                                    <span class="help-block">Tahun/Bulan/Hari</span>
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Alamat</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" name="alamat" <?php echo $d['alamat'] ?>></textarea>
                                                    <span class="help-block">Default textarea field</span>
                                                </div>
                                            </div>
                                            
                                            
                                    
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Jenis Kelamin</label>
                                                <div class="col-md-9">
                                                   <div class="form-group">
                                        <div class="col-md-4">                                    
                                            <label class="check"><input type="radio" class="iradio" value="Pria" name="jk" /> Pria</label>
                                        </div>
                                        <div class="col-md-4">                                    
                                            <label class="check"><input type="radio" class="iradio" value="Wanita" name="jk"/> Wanita</label>

                                        </div>
                                        
                                                    </div>
                                             <span class="help-block">Default textarea field</span>                    
                                                </div>
                                            </div>
                                          <div class="form-group">
                                                <label class="col-md-3 control-label">Agama</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="agama">
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen Katolik" >Kristen Katolik</option>
                                                        <option value="Protestan">Protestan</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                    </select>
                                                    <span class="help-block">Select box example</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Kabupaten</label>
                                                <div class="col-md-9">
                                                     <div id="kabupaten" >                                                                                         
                                            <select name="id_kabu" class="form-control" >
                <option value="">Please Select</option>
                <?php
                $query = mysql_query("SELECT * FROM kabupaten ORDER BY nama_kabupaten");
                while ($row = mysql_fetch_array($query)) {
                ?>
                    <option value="<?php echo $row['id_kabupaten']; ?>">
                        <?php echo $row['nama_kabupaten']; ?>
                    </option>
                <?php
                }
                ?>
            </select> </div>
                                            <span class="help-block">Pilih Kabupaten Disini</span>
                                        </div>
                                    </div>
                                       <div class="form-group">
                                                <label class="col-md-3 control-label">Kecamatan</label>
                                                <div class="col-md-9">
                                                     <div id="kecamatan" >
                                                      <select  name="id_keca"  class="form-control" >
                <option value="">Please Select</option>
                <?php
                $query = mysql_query("SELECT
                                    *
                                  FROM
                                    kecamatan
                                    INNER JOIN kabupaten ON kecamatan.id_kab = kabupaten.id_kabupaten ORDER BY nama_kecamatan");
                while ($row = mysql_fetch_array($query)) {
                ?>
                    <option id="kecamatan" class="<?php echo $row['id_kab']; ?>" value="<?php echo $row['id_kecamatan']; ?>">
                        <?php echo $row['nama_kecamatan']; ?>
                    </option>
                <?php
                }
                ?>
            </select>                                                                                         
                                        </div>
                                         <script src="jquery-1.10.2.min.js"></script>
                            <script src="jquery.chained.min.js"></script>
                            <script>
                                $("#kecamatan").chained("#kabupaten");
                            </script>
                                            <span class="help-block">Pilih Kecamatan Disini</span>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                                <label class="col-md-3 control-label">Desa</label>
                                                <div class="col-md-9">
                                                     <div id="desa" >
                                                      <select  name="id_des"  class="form-control" >
                <option value="">Please Select</option>
                <?php
                $query = mysql_query("SELECT
                                    *
                                  FROM
                                    desa
                                    INNER JOIN kecamatan ON desa.id_ketan = kecamatan.id_kecamatan ORDER BY nama_desa");
                while ($row = mysql_fetch_array($query)) {
                ?>
                    <option id="desa" class="<?php echo $row['id_ketan']; ?>" value="<?php echo $row['id_desa']; ?>">
                        <?php echo $row['nama_desa']; ?>
                    </option>
                <?php
                }
                ?>
            </select>                                                                                         
                                        </div>
                                         <script src="jquery-1.10.2.min.js"></script>
                            <script src="jquery.chained.min.js"></script>
                            <script>
                                $("#desa").chained("#kecamatan");
                            </script>
                                            <span class="help-block">Pilih Kecamatan Disini</span>
                                        </div>
                                    </div>
                                                </div>
                                            </div>
                                            
                                          
                                            
                                           
                                            
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




