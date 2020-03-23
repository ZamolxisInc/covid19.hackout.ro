<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://hackout.ro/storage/2018/11/cropped-hackout_h-32x32.png">

  <title>COVID 19 | Hackout.ro</title>

  <!-- Manifest file PWA: -->
  <link rel=”manifest” href="manifest.json" />

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/theme/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- moved from header -->
  <link rel="canonical" href="https://covid19.hackout.ro/" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Hackout | COVID-19 - Monitorizare" />
<meta property="og:description" content="Statistica COVID19 in Romania." />
<meta property="og:url" content="https://covid19.hackout.ro/" />
<meta property="og:site_name" content="Hackout" />
<meta property="og:image" content="https://covid19.hackout.ro/assets/og.png" />
<meta property="og:image:secure_url" content="https://covid19.hackout.ro/assets/og.png" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Hackout | COVID-19 - Monitorizare" />
<meta name="twitter:description" content="Statistica COVID19 in Romania." />
<meta name="twitter:image" content="https://covid19.hackout.ro/assets/og.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-48982254-24"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-48982254-24');
</script>

  <!-- moved from haeder -->

</head>
<body id="page-top">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion " id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home/">
        <div class="sidebar-brand-icon rotate-n-15">
   
        </div>
        <div class="sidebar-brand-text mx-3">COVID <sup>19</sup> | RO</div>
      </a>
      <div class="text-center d-md-inline">
      un proiect<br>
      <a href="https://hackout.ro" data-elementor-open-lightbox="">
          <img src="https://hackout.ro/storage/2018/08/hackout_h_white5.png" width="90%"> 
          </a>
      </div>  
  <br>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/home/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
        <div class="sidebar-heading">
          Statistica
        </div>
          <!-- Nav Item - Charts -->
         
          
          <li class="nav-item">
          <a class="nav-link" href="/harta/">
            <i class="fas fa-fw fa-map"></i>
            <span>Harta</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/statistica/">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Statistica</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/statistica/conexiuni/">
            <i class="fas fa-fw fa-network-wired"></i>
            <span>Conexiuni persoane</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/statistica/date/">
            <i class="fas fa-fw fa-database"></i>
            <span>Date persoane</span></a>
          </li>
        
      <div class="sidebar-heading">
        Altele
      </div>

          
      <li class="nav-item">
        <a class="nav-link" href="mailto:contact@hackout.ro">
          <i class="fas fa-fw fa-folder"></i>
          <span>Trimite date</span></a>
        </li>
           

        <li class="nav-item">
        <a class="nav-link" href="/api/">
          <i class="fas fa-fw fa-folder"></i>
          <span>API</span></a>
        </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      
         


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center  d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

      
    <br>
    <div class="text-center">
       <div class="fb-like" data-href="https://www.facebook.com/hackoutro/" data-width="" data-layout="box_count" data-action="like" data-size="small" data-share="true"></div>
    </div>
    
      <br>
      <div class="text-center d-md-inline">
        <a href="https://paypal.me/zamolxisorg" data-elementor-open-lightbox="">
          <img src="https://hackout.ro/storage/elementor/thumbs/button-PayPal-donate-ojx4bpmqyq2ubllg1e9ut422mufc00vs8r2i1rf3sw.png" width="100px" title="button-PayPal-donate" alt="button-PayPal-donate"> 
          </a>
          
      </div>

      <div class="text-center d-md-inline">
      Sursa datelor: <br>Libertatea, <br>Biziday, <br>Digi24,<br>INSP, <br> WHO, <br> MS
      </div>
      
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
      
        <!-- End of Topbar -->     


 <!-- Ask user to prompt device -->
 <style>
    /* style the elements with CSS */
    #pleaserotate-graphic{
        fill: #fff;
    }

    #pleaserotate-backdrop {
        color: #fff;
        background-color: #000;
    }
    #vis-net{
      max-width:100% !important;
    }
</style>

<?php


$i = isset($_SESSION['i']) ? $_SESSION['i'] : 0;

$i++;

if($i>5){
  $i=0;
}

$_SESSION['i'] = $i;



?>

<script>
  var PleaseRotateOptions = {
    startOnPageLoad: true,
    onHide: function(){},
    onShow: function(){},
    forcePortrait: true,
    message: "Please Rotate Your Device",
    subMessage: "(or click to continue)",
    allowClickBypass: false,
    onlyMobile: true,
    zIndex: 1000,
    iconNode: null
};

var someCounter = <?php echo(json_encode($i)); ?>;
//alert(someCounter);
if(someCounter==0){
  PleaseRotateOptions = {
      forcePortrait: false, // if you would prefer to force portrait mode
      message: "Va rugam sa rotiti dispozitivul",
      subMessage: "(sau click pentru continuare)"
                      };
}else{
  PleaseRotateOptions = {
    startOnPageLoad:false 
}
}

    /* you can pass in options here */
    
</script>
<script src="<?php echo base_url(); ?>assets/pleaserotate.min.js"></script>


   <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/theme/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/theme/vendor/jquery-easing/jquery.easing.min.js"></script>


  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>assets/theme/vendor/chart.js/Chart.min.js"></script>
   <!-- Page level plugins - Tables -->
  <script src="<?php echo base_url(); ?>assets/theme/vendor/datatables/jquery.dataTables.js"></script> 
 <script src="<?php echo base_url(); ?>assets/theme/vendor/datatables/dataTables.js"></script> 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/vendor/datatables/dataTables.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/custom.css"/>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>assets/theme/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/js/demo/chart-pie-demo.js"></script>
  <!-- Page level custom scripts --tables -->
  <!-- <script src="<?php echo base_url(); ?>assets/theme/js/demo/datatables-demo.js"></script> -->
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/theme/js/sb-admin-2.js"></script>
<!-- SWEETALERT IMPORT -->
    <script src="<?php echo base_url(); ?>assets/sweetalert/sweetalert2.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sweetalert/sweetalert2.css" />

    
        <body>