<?php
$pdf = Yii::createComponent('application.extensions.MPDF52.mpdf');

$html='


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Constancia de Tutor Tesista</title>
<style type="text/css">
<!--
body {
	font: "Times New Roman",Times,FreeSerif,serif;
	font-size:12pt;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Selectores de elemento/etiqueta ~~ */
ul, ol, dl { /* Debido a las diferencias existentes entre los navegadores, es recomendable no añadir relleno ni márgenes en las listas. Para lograr coherencia, puede especificar las cantidades deseadas aquí o en los elementos de lista (LI, DT, DD) que contienen. Recuerde que lo que haga aquí se aplicará en cascada en la lista .nav, a no ser que escriba un selector más específico. */
	padding: 0;
	margin: 0;
}
h1 {
	text-align:center;
	font-size: 16pt;
	margin-top: 0;	 /* la eliminación del margen superior resuelve un problema que origina que los márgenes escapen de la etiqueta div contenedora. El margen inferior restante lo mantendrá separado de los elementos de que le sigan. */
	padding-right: 15px;
	padding-left: 15px; /* la adición de relleno a los lados del elemento dentro de las divs, en lugar de en las divs propiamente dichas, elimina todas las matemáticas de modelo de cuadro. Una div anidada con relleno lateral también puede usarse como método alternativo. */
}
p {
	margin-top: 0;
	padding-right: 15px;
	padding-left: 15px;
}
a img { /* este selector elimina el borde azul predeterminado que se muestra en algunos navegadores alrededor de una imagen cuando está rodeada por un vínculo */
	border: none;
}
/* ~~ La aplicación de estilo a los vínculos del sitio debe permanecer en este orden (incluido el grupo de selectores que crea el efecto hover -paso por encima-). ~~ */

/* ~~ este contenedor de anchura fija rodea a las demás divs ~~ */
.container {
	width: 585px;
	background: #FFF;
	margin: 0 auto; /* el valor automático de los lados, unido a la anchura, centra el diseño */
}

/* ~~ no se asigna una anchura al encabezado. Se extenderá por toda la anchura del diseño. Contiene un marcador de posición de imagen que debe sustituirse por su propio logotipo vinculado ~~ */
.header {
}

/* ~~ Esta es la información de diseño. ~~ 

1) El relleno sólo se sitúa en la parte superior y/o inferior de la div. Los elementos situados dentro de esta div tienen relleno a los lados. Esto le ahorra las "matemáticas de modelo de cuadro". Recuerde que si añade relleno o borde lateral a la div propiamente dicha, éste se añadirá a la anchura que defina para crear la anchura *total*. También puede optar por eliminar el relleno del elemento en la div y colocar una segunda div dentro de ésta sin anchura y el relleno necesario para el diseño deseado.

*/

.content {

	padding: 10px 0;
}

/* ~~ El pie de página ~~ */
.footer {
	padding: 10px 0;
	font-size:8pt;
}

</style></head>

<body>

<div class="container">
  <div class="header"><a href="#"><img src="'.Yii::app()->theme->baseUrl.'/images/Logotipo_Unet_republica_bolivariana.jpg" alt="Insertar logotipo aquí" name="Insert_logo" width="233" height="100" id="Insert_logo" style="background: #C6D580; display:block;" /></a> 
    <!-- end .header --></div>
  <div class="content">
  
  	<br></br>
    <br></br>
    <h1>C O N S T A N C I A</h1>
    
    <br></br>
    
    <p align="justify" style="text-indent:40px">Quien suscribe, Ing. '.$jefe->Nombre.' '.$jefe->Apellido.', Jefe del Departamento de Ingeniería Informática, hace constar que el Prof. <strong> '.$Usuario->Nombre.' '.$Usuario->Apellido.' </strong>, es tutor del siguiente Trabajo de Aplicación Profesional, modalidad Tesis:</p>
	
    <br></br>
    <table width="100%" border="1" bordercolor="#000000" rules="all">
      <tr>
        <th scope="col"  align="center" bgcolor="#999999">Fecha de la defensa</th>
        <th scope="col"  align="center" bgcolor="#999999">Título</th>
        <th scope="col"  align="center" bgcolor="#999999">Autor</th>
      </tr>
      <tr>
        <td  align="center"><strong>'.date("d/m/Y",strtotime($tesis->Fecha_Defensa)).'</strong></td>
        <td  align="center"><strong>'.$tesis->Titulo.'</strong></td>
        <td  align="center"><strong>[Nombre, Apellido y Cedula]</strong></td>
      </tr>
    </table>
    
    <br></br>
    <p align="justify" style="text-indent:40px">Constancia que se expide para los fines concernientes, en San Cristóbal, <strong>'.date('d/m/Y').'</strong>.</p>
    <p>Atentamente,</p>
    <br></br>
    <br></br>
    <br></br>

	<p align="center">'.$jefe->Nombre.' '.$jefe->Apellido.'</p>
    <p align="center">Jefe del Departamento de Ing. Informática</p>

	<br></br>

    <!-- end .content --></div>
  <div class="footer">
  	<HR width=100% align="center"> 
    <p align="center">Edificio Administrativo: Avda. Universidad - Paramillo, Teléfono: 530422,  Apartado: 436 , San Cristóbal, Estado Táchira.</p>
    <p align="center">Oficina de Enlace: Parque Central Edificio Catuche. Nivel de Oficinas 1 – Oficinas 111 – 112.</p>
    <p align="center">Teléfono: 577-12-16 – Fax: 577-00-80 Caracas – Distrito Federal, Venezuela.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>

';
$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
$mpdf->WriteHTML($html);
$mpdf->Output('Consulta-'.$paciente->nombre."-".$paciente->identificacion."-".$model->fecha.'.pdf','D');
exit;
?>