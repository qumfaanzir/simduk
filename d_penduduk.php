<!DOCTYPE html>
<?php 
include "koneksi.php";
$per_hal=500;
$jumlah_record=mysql_query("SELECT COUNT(*) from kecamatan");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
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
            
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2> Data Kecamatan</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Table Data Kecamatan</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th><center>Nomor</center></th>
                                                <th><center>NIK</center></th>
                                                <th><center>Nama</center></th>
                                                <th><center>Alamat</center></th>
                                                
                                                <th><center>Kecamatan</center></th>
                                                <th><center>Desa</center></th>
                                                <th><center>Aksi</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                       <?php 
                                    include 'koneksi.php';
                                    $no=1;
                                    if(isset($_GET['cari'])){
                                    $cari=mysql_real_escape_string($_GET['cari']);
                                    $brg=mysql_query("select * from penduduk where id like '$cari' or perihal like '$cari'");
                                    }
                                        else{
                                                $brg=mysql_query("SELECT id_pen,nik,nama,tempat_lahir,tanggal_lahir, alamat, jk, agama,nama_kabupaten,nama_kecamatan, nama_desa from kabupaten INNER JOIN penduduk ON id_kabupaten=id_kabu
                                                    JOIN kecamatan ON id_kecamatan=id_keca
                                                    JOIN desa ON id_desa=id_des");
                                            }
    
                                    while($row=mysql_fetch_array($brg)){

                                    ?>
                                   
                                         <td><center><?php  

                                              
                                        echo $no++ ?></center></td>
                                    <td><center><?php echo $row['nik']; ?></center></td>
                                    
                                    <td><center><?php echo $row['nama'];?></center></td>

                                    <td><center><?php echo $row ['alamat']; ?></center> </td>

                                    <td><center> <?php echo $row ['nama_kecamatan']?></center> </td>

                                    <td><center> <?php echo $row ['nama_desa']?></center> </td>
                                    
                                    <td><center><a href="e_penduduk.php?id=<?php echo $row['id_pen']; ?>"><button class="btn btn-success btn-rounded btn-sm"><span class="fa fa-pencil"></span></button></a>
                                    <a href="det_desa.php?id=<?php echo $row['id_desa']; ?>"><button class="btn btn-warning btn-rounded btn-sm"><span class="fa fa-eye"></span></button></a>
                <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='del_penduduk.php?id=<?php echo $row['id_pen']; ?>' }"><button class="btn btn-danger btn-rounded btn-sm" ><span class="fa fa-times"></span></button></a></center></td>
            </td>
                                        
                                    </td>
                                     </tr>
                                    <?php  }  ?>

                                  
                                    
                                    </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                           

                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
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
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        
    </body>
</html>






