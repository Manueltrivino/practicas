<?php 
require 'lateral.php';
include 'array.php';
require 'datos.php';
require 'funciones.php';
require 'encabezado.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>1er Desempeño</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  * 2025
  ======================================================== -->
</head>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Listado de Productos </h1>

      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item"><a href="#">Productos</a></li>
          <li class="breadcrumb-item active">Los mas vendidos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">


            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">Los mas vendidos </h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Stock Min.</th>
                        <th scope="col" title="Stock Actual - Stock Min."> Diferencia Stock</th>
                        <th scope="col">Precio Unit.</th>
                        <th scope="col">Venta Web</th>
                        <th scope="col">Monetario en stock</th>
                      </tr>
                    </thead>
                    <tbody>

                     
                      
                      <?php 
                      for($i=0; $i<$cantidadDeElementos; $i++){?>
                      <tr>
                       <!-- Columna de la imagen del producto con el codigo Si poso el mouse sobre la imagen, se debe ver 
en el tooltip1 el mensaje con su código.  -->
                        <th scope="row"> <?php echo ($i + 1); ?></th>
                        <th scope="row">
                          <a href="#"><img src="<?php echo $tablaPro[$i]['Imagen']; ?>" title="<?php echo $tablaPro[$i]['Codigo']; ?>" /></a>
                        </th>

                        <td>
                       <!-- texto del producto -->
                          <a href="#" class="text-primary fw-bold">
                          <?php echo $tablaPro[$i]['Texto']; ?>
                          </a>

                       <!-- Barra de porcentage de Stock-->
                          <div class="progress mt-3">
                            <?php $color = DarColor($tablaPro[$i]['Stock'], $tablaPro[$i]['Stockminimo']);?>
                            <div class="progress-bar progress-bar-striped bg<?php echo $color;?> progress-bar-animated"
                              role="progressbar" style="width: <?php  echo $tablaPro[$i]['Stock']; ?>%" aria-valuenow="80" aria-valuemin="0"
                              aria-valuemax="100" title= "Stock actual <?php  echo $tablaPro[$i]['Stock']; ?>"></div>
                          </div>
                        </td>

                        <td>
                          <h4>
                       <!-- -----Stock minimo----- -->
                            <span class="badge border-info border-1 text-info">
                            <?php echo $tablaPro[$i]['Stockminimo']; ?>
                            </span>
                          </h4>
                        </td>

                        <td>
                          <h4>
                       <!-- ------Diferencia de Stock---- -->
                            <span class="badge border-info border-1 text-info" title=" <?php echo $tablaPro[$i]['diferenciaStock']; ?>" >
                              <?php  
                              $diferencia_Stock = CalculoDifernciaDeStock($tablaPro[$i]['Stock'], $tablaPro[$i]['Stockminimo']); ?>
                              <?php echo $diferencia_Stock;?>
                              
                            </span>
                          </h4>
                        </td>

                       <!-- --------columna de precios por unidad------- -->
                        <td>
                          <h4>
                            <?php $valorDolar = $tablaPro[$i]['PrecioDolar']; ?> 
                            <?php $valorPeso = PrecioTotal($valorDolar, $cotizacion); ?>
                            <span class="badge border-success border-1 text<?php echo $color;?> ">
                            <?php echo legir($moneda, "dolar", 'U$S', '$');?><?php echo  legir($moneda, "dolar", $valorDolar, $valorPeso); ?> </span>
                          </h4>

                        </td>


                        <?php $siVenta = venta_web($tablaPro[$i]['Stock']);?>
                        <?php $tituloVenta = Titulo_venta_web($tablaPro[$i]['Stock']);?>
                        <td>
                          <h3>
                            <span title="<?php echo $tituloVenta; ?> " class="badge border-success border-1 text<?php echo $color;?>">
                              <i class="bi bi<?php echo $siVenta; ?> "></i>
                            </span>
                          </h3>

                       <!-- ----------Columna precio total de stock por producto----------- -->
                        </td>
                          <?php $valorTotalPorProductoDolar = PrecioTotal($tablaPro[$i]['PrecioDolar'], $tablaPro[$i]['Stock']); ?>
                        <?php $valorTotalPorProductoPesos = PrecioTotal($valorTotalPorProductoDolar, $cotizacion);?>
                        <td>
                          <h4>
                            <span class="badge border-info border-1 text-info">
                            <?php echo legir($moneda, "dolar", 'U$S', '$');?><?php echo  legir($moneda, "dolar",$valorTotalPorProductoDolar, $valorTotalPorProductoPesos); ?></span>
                          </h4>
                        </td>
                      </tr>
                      <?php } ?>


                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

<?php require 'inferioresPie.php';?>
