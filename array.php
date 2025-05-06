<?php 
include 'datos.php';
?>
<?php 

$tablaPro = array();
$tablaPro[0]['Codigo']="#1234";
$tablaPro[0]['Imagen']="assets/img/reloj.jpg";
$tablaPro[0]['Texto']="Led Adjustable Sports Bracelet Watch";
$tablaPro[0]['Stock']=$stockActual0;
$tablaPro[0]['Stockminimo']= $stockMinimo0;
$tablaPro[0]['diferenciaStock']="30 - 20";
$tablaPro[0]['DiferenciaStock']=10;
$tablaPro[0]['PrecioDolar']= $precio0;


$tablaPro[1]['Codigo']="#2345";
$tablaPro[1]['Imagen']="assets/img/auriculares1.jpg";
$tablaPro[1]['Texto']="Wireless in-ear headphones Black";
$tablaPro[1]['Stock']=$stockActual1;
$tablaPro[1]['Stockminimo']=$stockMinimo1;
$tablaPro[1]['diferenciaStock']="40 - 20";
$tablaPro[1]['DiferenciaStock']=20;
$tablaPro[1]['PrecioDolar']= $precio1;

$tablaPro[2]['Codigo']="#3456";
$tablaPro[2]['Imagen']="assets/img/auriculares2.jpg";
$tablaPro[2]['Texto']="White wireless headset";
$tablaPro[2]['Stock']=$stockActual2;
$tablaPro[2]['Stockminimo']= $stockMinimo2;
$tablaPro[2]['diferenciaStock']="20 - 25";
$tablaPro[2]['DiferenciaStock']= -5;
$tablaPro[2]['PrecioDolar']= $precio2;

$tablaPro[3]['Codigo']="#4567";
$tablaPro[3]['Imagen']= 'assets/img/soporte.jpg';
$tablaPro[3]['Texto']="Extendable Support Cell Phone for Notebook";
$tablaPro[3]['Stock']=$stockActual3;
$tablaPro[3]['Stockminimo']= $stockMinimo3;
$tablaPro[3]['diferenciaStock']="80 - 40";
$tablaPro[3]['DiferenciaStock']= 40;
$tablaPro[3]['PrecioDolar']= $precio3;


$tablaPro[4]['Codigo']="#5678";
$tablaPro[4]['Imagen']= 'assets/img/funda.jpg';
$tablaPro[4]['Texto']="Sports Case For iPhone Armband";
$tablaPro[4]['Stock']=$stockActual4;
$tablaPro[4]['Stockminimo']= $stockMinimo4;
$tablaPro[4]['diferenciaStock']="100 - 45";
$tablaPro[4]['DiferenciaStock']= 55;
$tablaPro[4]['PrecioDolar']= $precio4;


$cantidadDeElementos = count($tablaPro);
?>
