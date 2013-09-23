<?php
  /**
  *  Index
  */
$head='';
	 error_reporting(E_ALL);
ini_set('display_errors', '1');
   require_once 'config.php';
   require_once 'funciones.php';
   $funcion='index';
	$afiliadoid='25870';
if (isset($_GET['funcion'])) {
	$metodo='get';
	$funcion= $_GET['funcion'];
	
} 


	
  switch($funcion) {
	case 'report_instalaciones_por_dia_toolbar':
	   $grafico=report_instalaciones_hoy('container1');
	  $cuerpo='<div id="container1"></div><script type="text/javascript">'. $grafico->render("chart1").'</script>';
   
	
	break;
	case 'report_toolbars_active':
	   $grafico=report_toolbars_active('container1');
	  $cuerpo='<div id="container1"></div><script type="text/javascript">'. $grafico->render("chart1").'</script>';
   
	
	break;
		case 'report_ingresos_toolbar':
	   $grafico=report_ingresos_toolbar('container1');
	  $cuerpo='<div id="container1"></div><script type="text/javascript">'. $grafico->render("chart1").'</script>';
   
	
	break;
	case 'report_instalaciones_por_pais':
	   $graficopaises=chart_instalaciones_por_pais('container3');
		$cuerpo='<div id="container3"></div><script type="text/javascript">'. $graficopaises->render("chart2").'</script>';
	break;
	
	default:
	
	   $grafico=report_instalaciones_hoy('container1');
	  $cuerpo='<div id="container1"></div><script type="text/javascript">'. $grafico->render("chart1").'</script>';
   
	break; 
	  
	  
	  
  }
 
  /**
  $sql="SELECT fecha_local, COUNT(DISTINCT (hardware_id)) AS instalaciones FROM instalaciones WHERE afiliado='25870'  AND por='montiera' GROUP BY fecha_local";
  
  $resultado=jr_db_query($sql);

  $resultado_uno= sql_a_array($resultado,array('fecha_local','instalaciones') ) ;
	
  $titulos_x=get_array_de_sql($resultado_uno,'fecha_local' ); 
	 
 $valores_x=get_array_de_sql($resultado_uno,'instalaciones' ,0,1);
   $series[] =array(
  'type' => 'column',
	'name' => 'Ingresos',
	'singular' => 'singular_column',
	'data' => $valores_x
);
 
   $valores_x=get_array_de_sql($resultado_uno,'instalaciones' ,0);
   $singular_y='Instalaciones';
  $series[] =array(
  'type' => 'line',
	'name' => $singular_y,
	'singular' => 'singular_line',
	'data' => $valores_x
);

  ***/

	include 'header.php';
   echo $cuerpo;
	?>

	
	
	
	 
	
	<table border=1>
<tr>
<td bgcolor=silver class='medium'>fecha_local</td><td bgcolor=silver class='medium'>instalaciones</td></tr>
<tr>
<td class='normal' valign='top'>20130918</td>
<td class='normal' valign='top'>4</td>
</tr>
<tr>
<td class='normal' valign='top'>20130919</td>
<td class='normal' valign='top'>6</td>
</tr>
<tr>
<td class='normal' valign='top'>20130920</td>
<td class='normal' valign='top'>60</td>
</tr>
<tr>
<td class='normal' valign='top'>20130921</td>
<td class='normal' valign='top'>76</td>
</tr>
<tr>
<td class='normal' valign='top'>20130922</td>
<td class='normal' valign='top'>19</td>
</tr>
</table>

	
  <?php	
		  
  include 'footer.php';
  

?>