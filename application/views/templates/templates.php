<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../public/images/favicon.ico" type="image/ico" />

    <title> ini aplikasi sman2 </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('public') ?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('public') ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('public') ?>/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('public') ?>/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="<?php echo base_url('public') ?>/sweetalert/dist/sweetalert.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('public') ?>/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url('public') ?>/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('public') ?>/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('public') ?>/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="<?php echo base_url('public') ?>/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('public') ?>/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('public') ?>/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('public') ?>/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('public') ?>/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  </head>


<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;" >
              <a class="site_title" href=" <?php echo base_url(); ?>admin/index">

             
                  <i class="fas fa-school"></i>
                  
                </i> <span>SMAN 2</span>

              </a>
            </div>
                        <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic" >
                <center><img src="<?php echo base_url(); ?>public/images/sman2.png " alt="..."  width=95% ></center>
              </div>
              <div class="profile_info">
                <font size="3px" color="white" style="font-family: arial ">Nama akun user : </font>
                <font size="5px" color="white" style="font-family: calibri "><?php echo $this->session->userdata('username')  ?></font>
                
              
              </div>
            </div>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>admin/index"><i class="fa fa-home"></i> Beranda </span></a>
                  </li>

                  <li><a> <i class="fas fa-user"></i> &nbsp;&nbsp;  User Management<span class="fa fa-chevron-down"> </span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/daftar_user"> Daftar User </a></li>
                    </ul>
                    
                  </li>
<!--  -->
                  <li><a><i class="fa fa-edit"></i> Data Wali Kelas<span class="fa fa-chevron-down"></span></a>
            
                  
                      <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/daftar_wali"> Daftar Wali kelas</a></li>
                    
                      </ul>
              
                  </li>

                   <li><a><i class="fa fa-edit"></i> Data Guru Pengajar<span class="fa fa-chevron-down"></span></a>
            
                  
                      <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/daftar_guru"> Daftar Guru Pengajar</a></li>
                    
                      </ul>
              
                  </li>
                

                  <li><a><i class="fa fa-edit"></i> Data Siswa <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="<?php echo base_url(); ?>admin/daftar_siswa"> Daftar Data Siswa </a></li>
                     
                      
                    </ul>
                  </li>

                  <li><a><i class="fa fa-table"></i> Jadwal Pelajaran <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="<?php echo base_url(); ?>admin/daftar_jadwal12">Daftar Jadwal Pelajaran kelas</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>  Data Presensi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                    
                      <li><a href="<?php echo base_url();?>admin/lihat_presensi12 ">Data Presensi Kelas XII</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>index/logout"> Log Out</a></li>
              </ul>
              

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <div class="right_col" role="main">
           <?php $this->load->view($content); ?>
        </div>

        <!-- page content -->
        
        <!-- /page content -->
      </div>
    </div>
        <!-- footer content -->
          <footer id="footer" class="footer">
            <div class="container text-center">

              <font  style=" color: green">
                © 2017 SMAN 2 Mojokerto <br>
               The first RSBI in Mojokerto
              </font>
              <div class="credits">   
              </div>
            </div>
          </footer>
        <!-- /footer content -->
      </div>
    </div>

      
         
     


        <!-- top navigation -->
       

         <!-- /top navigation -->

        <!-- page content -->
        
    <!-- jQuery -->
    <script src="<?php echo base_url('public') ?>/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('public') ?>/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('public') ?>/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('public') ?>/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('public') ?>/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url('public') ?>/gauge.js/dist/gauge.min.js"></script>
    <script src="<?php echo base_url('public') ?>/sweetalert/dist/sweetalert.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('public') ?>/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('public') ?>/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url('public') ?>/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('public') ?>/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url('public') ?>/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url('public') ?>/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url('public') ?>/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url('public') ?>/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('public') ?>/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url('public') ?>/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url('public') ?>/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('public') ?>/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('public') ?>/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url('public') ?>/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url('public') ?>/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('public') ?>/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url('public') ?>/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('public') ?>/js/custom.min.js"></script>
    <script src="<?php echo base_url('public') ?>/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('public') ?>/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url('public') ?>/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url('public') ?>/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url('public') ?>/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url('public') ?>/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url('public') ?>/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url('public') ?>/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url('public') ?>/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url('public') ?>/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url('public') ?>/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url('public') ?>/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        $('#jadwal').change(function(){
        
          var id=$(this).val();
            $.ajax({
                url : "<?php echo base_url();?>admin/get_jadwalpresensi",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_jadwal+'>'+data[i].jam_pelajaran+'</option>';
                    }
                    $('.jam_pelajaran').html(html);
                     
                }
            });
        });
    });
</script>
 <script type="text/javascript">
  function bacaGambar(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
 
      reader.onload = function (e) {
          $('#gambar_nodin').attr('src', e.target.result);
      }
 
      reader.readAsDataURL(input.files[0]);
   }
}
$("#preview_gambar").change(function(){
   bacaGambar(this);
});
</script>

<script type="text/javascript">
        
  $('.sa-remove-wt').click(function () {
     var postId = $(this).data('id');
                swal({
                title: "Apakah anda yakin?",
                text: "Data ini akan dihapus",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger waves-effect waves-light',
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                closeOnConfirm: true,
                closeOnCancel: true
                },
                function(){
                    window.location.href = "hapus_wali/?id="+ postId;
                });
            });

    </script>

    <script type="text/javascript">
        
  $('.sa-remove-user').click(function () {
     var postId = $(this).data('id');
                swal({
                title: "Apakah anda yakin?",
                text: "Data ini akan dihapus",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger waves-effect waves-light',
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                closeOnConfirm: true,
                closeOnCancel: true
                },
                function(){
                    window.location.href = "hapus_user/?id="+ postId;
                });
            });

    </script>

    <script type="text/javascript">
        
  $('.sa-remove-guru').click(function () {
     var postId = $(this).data('id');
                swal({
                title: "Apakah anda yakin?",
                text: "Data ini akan dihapus",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger waves-effect waves-light',
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                closeOnConfirm: true,
                closeOnCancel: true
                },
                function(){
                    window.location.href = "hapus_guru/?id="+ postId;
                });
            });

    </script>
    <script type="text/javascript">
        
  $('.sa-remove-siswa').click(function () {
     var postId = $(this).data('id');
                swal({
                title: "Apakah anda yakin?",
                text: "Data ini akan dihapus",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger waves-effect waves-light',
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                closeOnConfirm: true,
                closeOnCancel: true
                },
                function(){
                    window.location.href = "hapus_siswa/?id="+ postId;
                });
            });

    </script>

    <script type="text/javascript">
        
  $('.sa-remove-jadwal').click(function () {
     var postId = $(this).data('id');
                swal({
                title: "Apakah anda yakin?",
                text: "Data ini akan dihapus",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger waves-effect waves-light',
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                closeOnConfirm: true,
                closeOnCancel: true
                },
                function(){
                    window.location.href = "hapus_jadwal12/?id="+ postId;
                });
            });

    </script>

  
  </body>
</html>
       
  