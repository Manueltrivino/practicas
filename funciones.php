<?php 
/*Diferencia de stock*/
function CalculoDifernciaDeStock($stockActual, $stockMinimo)
{  
   $diferenciaDeStock = $stockActual - $stockMinimo;
   return $diferenciaDeStock;
}

/*Precio total del stock */
function PrecioTotal($precio, $cantidadProducto){
$totalValorStock = $precio * $cantidadProducto;
return $totalValorStock;
}

/* Da color a las barras de %, al precio y las imagenes de los carritos de compras*/
function DarColor($stockActual, $stockMinimo){
    $color = "";
    $diferencia = $stockActual - $stockMinimo;
    if($diferencia <= 10){
        $color = "-danger";
    }elseif($diferencia > 10 && $diferencia <= 30){
        $color = "-warning";
    }else
        $color = "-success";
    

    return $color;
}
/*Cambia el logo del carrito */
function venta_web($stockActual){
    $venta="-cart4";
    if($stockActual > 10){
        $venta="-cart4";
    }else{
        $venta="-cart-x-fill"; 

    }
    return $venta;
}
/* Muestra la leyenda pasando el mous segun el stock disponible */
function Titulo_venta_web($stockActual){
    $tituloventa="Se permite venta web";
    if($stockActual > 10){
        $tituloventa="Se permite venta web";
    }else{
        $tituloventa="No se permite venta web"; 
    }
    return $tituloventa;
}

/* Total suma de los pruductos  total de las suma de precios de la tienda web*/

function suma_varias($valor1, $valor2){

    $valor2 = $valor1 + $valor2;

    return $valor2;
}
/* Eleccion de moneda*/
function legir($parametro1, $parametro2, $parametro3, $parametro4){
    if($parametro1 == $parametro2){
        return $parametro3;
    }else{
        return $parametro4;
    }
}

?>