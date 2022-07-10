<?php
/**
* Modelo de usuario
*
* Contiene todas las funciones para el procesamientos de datos para un usuario
*
* @package
* @author
* @version
* @date
*
**/

/** Carga las funciones para la gesti�n de bases de datos*/
// include('libs/basedatos.php');

/**
* Elimina la informaci�n de un usuario
*
* @param int $recurso Id del recurso
* @return integer N�mero de registros eliminados
*
* @uses ejecutarSQL
*/
function eliminarRecurso($recurso) {

	$SQL = 'DELETE FROM recursos WHERE id_recurso = ' . $usuario['id_recurso'];
	$resultado = ejecutarSQL($SQL);

	return $resultado;
}

/**
* Genera el t�tulo de un formulario
*
* @return text T�tulo del formulario
*
*/
function generarTitulo() {

	return "P&aacute;gina inicial";
}
?>