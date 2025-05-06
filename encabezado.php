
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/" target="_blank"
        class="logo d-flex align-items-center" title="puedes descargar la template original desde aqui">
        <img src="assets/img/logo.png" alt="2025">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#">
          <img src="assets/img/<?php echo legir($moneda, "dolar", 'en.jpg', 'ar.png')?>" alt="lang" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo legir($moneda, "dolar", "DÓLARES", "PESOS")?></span>        
          </a>
        </li>
      </ul>
    </nav>  <!-- End Currency -->
<?php 
      ?>

 </header><!-- End Header -->
 <?php 
$dat = 0;?>
<?php require 'datos.php';
?>