<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> SMAN2 APP </title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/style.css">
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" a href="<?php echo base_url('index'); ?> ">SMAN 2 MOJOKERTO</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        
        <ul class="nav navbar-nav navbar-right" >
          <li><a href="#banner">BERANDA</a></li>
          <li><a href="#feature">PROFILE SEKOLAH</a></li>
          <li><a href="#organisations">TUJUAN SEKOLAH</a></li>
          <li><a href="#testimonial">PRESTASI SISWA</a></li>
          
          <li class="btn-trial"><a href="<?php echo base_url(); ?>loginbaru/index">Sign in</a></li>


          
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Modal box-->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1 class="modal-title text-center form-title" style="color: green">SELAMAT DATANG</h1><br>
             <span class="login10-form-avatar mt-4" >
               <center> <img src="<?php echo base_url(); ?>public/images/sman2.png" alt="AVATAR" width="150"></center>
              </span>
        </div>
        <div class="modal-body padtrbl">
 

          <div class="login-box-body">
 
           

            <div class="form-group">

              <?php if(!empty(validation_errors())) : ?>
            <div class="alert alert-danger">
               <?php echo validation_errors(); ?>
            </div>
              <?php endif; ?>

            
                <div class="form-group has-feedback">

                  <form action="<?= BASE_URL('loginbaru/login_val'); ?> "method="post"> 
                  <!----- username -------------->
                  <input class="form-control" placeholder="username"  id="loginid" type="text" autocomplete="off" name="username" value="<?php echo set_value('username') ?>">
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="password" id="loginpsw" autocomplete="off" type="password" name="password">
                 <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="sumbit" class="btn btn-green btn-block btn-flat">Sign In</button>
                  </div>
                </form>
                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      </div>

    </div>
  </div>
  <!--/ Modal box-->
  <!--Banner-->
  <section id="banner" class="section-padding">
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">

        </div>
      </div>
    </div>
  </div>
</section>
  <!--/ Banner-->
  <!--Feature-->
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>PROFILE SEKOLAH</h2>
          <p>SMA Negeri 2 Kota Mojokerto (SMANDA) adalah Sekolah Menengah Atas Negeri bertaraf internasional yang biasa disebut Buwitashakti (Bumi Wiyata Setya Bhakti) dan Inscada (Innovative School of SMANDA) yang berada di Kota Mojokerto, Jawa Timur.</p>
          <hr class="bottom-line"><br>
        </div>
        <div class="feature-info">
          <div class="fea" align="center">
            <div class="col-md-5">
              <div class="heading pull-right" >
                <h1>VISI SEKOLAH</h1><br>
                <p>1. Menjadi insan yang taat menjalankan ajaran agama sesuai dengan keyakinannya.<br>
                  2. Memiliki pengetahuan dan ketrampilan yang memadai seiring dengan kemajuan ilmu pengetahuan, teknologi dan ICT.<br>
                  3. Memiliki sikap dan perilaku yang sejalan dengan nilai-nilai moral dan etika yang berlaku.<br>
                  4. Memiliki sikap dan perilaku hidup bersih, sehat, teratur, dan suka bekerja keras untuk  pembangunan yang berwawasan lingkungan.<br>
                  5. Kompeten dan kompetitif menghadapi persaingan era global.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-css3"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-5">
              <div class="heading pull-right">
                <center><h1>MISI SEKOLAH</h1></center><br>
                <p>1. Mengembangkan potensi spiritual dan kebiasaan menjalankan ajaran agama sesuai dengan keyakinannya sebagai insan yang beriman dan bertaqwa. <br>
                2. Menumbuhkan/Menumbuh kembangkan kepribadian siswa sebagai insan yang berakhlak mulia.<br>
                3. Mengembangkan sikap dan perilaku yang ramah dan bersahabat terhadap sesama manusia, peduli dengan lingkungan sekitarnya dan memiliki sikap positif untuk program pembangunan berkelanjutan untuk/demi kepentingan NKRI serta masyarakat internasional.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-drupal"></i>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--/ feature-->
  <!--Organisations-->
  <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>100%</h3>
              <p>Tingkat Kelulusan</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>80%</h3>
              <p>Memasuki PTN</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>9,00</h3>
              <p>Rata-rata Nilai UN</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt"> TUJUAN JANGKA PENDEK <br> (1 TAHUN) </h3>
              
            </hgroup>
            <p class="det-p">Menciptakan proses pembelajaran yang aktif,inovatif, inspiratif, efektif, efisien, terarah dan menyenangkan.<br>
            Mampu memperoleh, mempertahankan dan meningkatkan prestasi juara bidang akademik dan non akademik di tingkat kota/kabupaten, provinsi, nasional, dan internasional.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Organisations-->
  <!--work-shop-->
  
  <!--/ work-shop-->
 
  <!--Testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h1 class="white">PRESTASI SISWA SMAN 2 MOJOKERTO</h1><br>
          <p class="white">Beberapa gambar yang diabadikan mengenai prestsi-prestasi siswa di SMAN 2 Mojokerto.<br> Prestasi Siswa tidak hanya mengenai bidang akademik saja melainkan juga ada di bidang non-akademi</p><br>
          
        </div>
        <div class="col-md-6 col-sm-6">
       
            <img src="<?php echo base_url(); ?>vendor/img/prestasi1.jpg" width="500">
            <p class="text-name"></p>
          
        </div>
        <div class="col-md-6 col-sm-6">
         
            <img src="<?php echo base_url(); ?>vendor/img/prestasi2.jpg" width="500">
            <p class="text-name"></p>
          </div>
          <div class="col-md-6 col-sm-6">
         
            <img src="<?php echo base_url(); ?>vendor/img/prestasi3.jpeg" width="520">
            <p class="text-name"></p>
          </div>
          <div class="col-md-6 col-sm-6">
         
            <img src="<?php echo base_url(); ?>vendor/img/prestasi4.jpg" width="500">
            <p class="text-name"></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonial-->
  
  <!--Contact-->
  