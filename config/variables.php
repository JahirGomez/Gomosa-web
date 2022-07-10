<?php
/**
* Declaración de variables para la ubicación del sistema y elementos iniciales
*
* @package
* @author
* @version
* @date
*
**/

/**
* Nombre de la aplicacion
* @global string $aplicacion
*/
$aplicacion = 'GomosaWeb';

/**
* Sistema operativo (WINDOWS|UNIX|MAC)
* @global string $sistema_operativo
*/
$sistema_operativo = 'WINDOWS';

/**
* Directorio de instalacion de la aplicacion
* @global string $directorio_base
*/
$directorio_base = 'c:/xampp/htdocs/aplicacion/';

/**
* URL de la aplicacion
* @global string $url_base
*/
$url_base = 'http://localhost/aplicacion/';

/**
* Controlador por defecto
* @global string $controlador_predefinido
*/
$controlador_predefinido = 'usuario';

/**
* Accion por defecto
* @global string $accion_predefinida
*/
$accion_predefinida = 'iniciar';

/**
* Extension del archivo del modelo
* @global string $modelo_extension
*/
$modelo_extension = 'Modelo.php';

/**
* Extension del archivo de la vista
* @global string $vista_extension
*/
$vista_extension = 'Vista.php';

/**
* Extension del archivo del controlador
* @global string $controlador_extension
*/
$controlador_extension = 'Controlador.php';

?>