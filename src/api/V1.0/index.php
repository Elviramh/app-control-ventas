<?php
require_once '../includes/conexion.php';
define('API_VERSION', 'V1.0');
$uri = explode(API_VERSION.'/', parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH))[1];
$uri_array = explode('/',$uri);
$recurso = array_shift($uri_array); // recurso  es lo que va detras del v1.00 en la url

$operacion = strtolower($_SERVER['REQUEST_METHOD']); // la operacion que se quiere ejecutar seria el metodo de la peticion, que es get
$vista= 'json';
$salida=array();
$http_code=404;

@include "modelos/$operacion-$recurso.php";

@include "vistas/$vista.php";


