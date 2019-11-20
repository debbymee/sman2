<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../public/images/favicon.ico" type="image/ico" />

    <title> Halaman Wali Kelas </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('public') ?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('public') ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('public') ?>/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('public') ?>/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('public') ?>/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url('public') ?>/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('public') ?>/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('public') ?>/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>


<body class="nav-md">
    <div class="container body" >
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;" >
              <a class="site_title" href=" <?php echo base_url(); ?>home/index">

             
                  <i class="fas fa-school"></i>
                  
                </i> <span>SMAN 2 MJK</span>

              </a>
            </div>


            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>public/images/default.jpg " alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <font size="3px" color="white" style="font-family: arial ">Nama akun user : </font>
                <font size="5px" color="white" style="font-family: calibri "><?php echo $this->session->userdata('username')  ?></font>
                
              
              </div>
            </div>


             <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>wali_kelas/index"><i class="fa fa-home"></i> Beranda </span></a>
               
                  </li>
             
      
                
                

                  <li><a><i class="fa fa-edit"></i> Profil Diri <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="<?php echo base_url(); ?>Wali_kelas/bio_wali/<?php echo $this->session->userdata('id'); ?>"> Lihat Biodata diri</a></li>
                      <li><a href="<?php echo base_url(); ?>Wali_kelas/edit_pass/<?php echo $this->session->userdata('id'); ?>">Edit Password</a></li>


                      
                   
                      
                    </ul>
                  </li>

                  <li><a><i class="fa fa-bar-chart-o"></i> Presensi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
             
                      <li><a href="<?php echo base_url();?>wali_kelas/lihat_presensi">Data Presensi</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
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
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   SMAN 2
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
  
                    <li><a href="<?php echo base_url(); ?>index/logout"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
         <!-- /top navigation -->

        <!-- page content -->
       
  