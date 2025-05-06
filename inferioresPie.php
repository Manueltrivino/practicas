

<div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">
                    PRODUCTOS <span>| Cantidad para la venta web</span> </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <div class="ps-3">
                      <?php 
                        $totalStock = 0;
                        for($t=0; $t<$cantidadDeElementos; $t++){
                          $totalStock = suma_varias($tablaPro[$t]['Stock'], $totalStock);
                        }
                      ?>
                      <h6><?php echo $totalStock; ?> </h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body"><!--  Stock Actual * Precio -->
                  <h5 class="card-title">
                    Total <span>| Monetario en Stock</span> </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <?php 
                        $valorTotal = 0;
                        for($t=0; $t<$cantidadDeElementos; $t++){
                          $valor = PrecioTotal($tablaPro[$t]['PrecioDolar'], $tablaPro[$t]['Stock']);
                          $valorTotal = suma_varias($valor, $valorTotal);
                        }
                      ?>
                      <!-- --------------Stock total de prodctos------------- -->
                      <?php $valorTotalProductoPesos = PrecioTotal($valorTotal, $cotizacion); ?>
                        <td>
                    <div class="ps-3">
                      <h6><?php echo legir($moneda, "dolar", 'U$S', '$')?><?php echo  legir($moneda, "dolar",$valorTotal, $valorTotalProductoPesos) ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>


          </div><!-- End Left side columns -->
        </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working html/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files 2023-->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File 2023-->
  <script src="assets/js/main.js"></script>
 

</body>

</html>

<?php $pie =0 ;?>