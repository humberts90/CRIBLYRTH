<?php
$html = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formato Acta Evaluacion Pasantia</title>
<style type="text/css">
<!--
body {
	font: "Times New Roman",Times,FreeSerif,serif;
	font-size:10pt;
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
	margin-top: 4px;
	padding-right: 15px;
	padding-left: 15px;
}
a img { /* este selector elimina el borde azul predeterminado que se muestra en algunos navegadores alrededor de una imagen cuando está rodeada por un vínculo */
	border: none;
}
/* ~~ La aplicación de estilo a los vínculos del sitio debe permanecer en este orden (incluido el grupo de selectores que crea el efecto hover -paso por encima-). ~~ */

/* ~~ este contenedor de anchura fija rodea a las demás divs ~~ */
.container {
	width: 945px;
	background: #FFF;
	margin: 0 auto; /* el valor automático de los lados, unido a la anchura, centra el diseño */
}

/* ~~ no se asigna una anchura al encabezado. Se extenderá por toda la anchura del diseño. Contiene un marcador de posición de imagen que debe sustituirse por su propio logotipo vinculado ~~ */
.header {
	display:inline;
}

/* ~~ Esta es la información de diseño. ~~ 

1) El relleno sólo se sitúa en la parte superior y/o inferior de la div. Los elementos situados dentro de esta div tienen relleno a los lados. Esto le ahorra las "matemáticas de modelo de cuadro". Recuerde que si añade relleno o borde lateral a la div propiamente dicha, éste se añadirá a la anchura que defina para crear la anchura *total*. También puede optar por eliminar el relleno del elemento en la div y colocar una segunda div dentro de ésta sin anchura y el relleno necesario para el diseño deseado.

*/

.content {

	padding: 5px 0;
}

/* ~~ El pie de página ~~ */
.footer {
	padding: 3px 0;
	font-size:8pt;
}

</style></head>

<body>

<div class="container">
  <div class="header">
    <a href="#"><img src="'.Yii::app()->theme->baseUrl.'/images/Logotipo_Unet_republica_bolivariana.jpg" alt="Insertar logotipo aquí" name="Insert_logo" width="200" height="90" id="Insert_logo" style="background: #C6D580;"/></a>
    <p align="right">Departamento de Ingeniería Informática <br />Trabajo de Aplicación Profesional</p>
  </div>
  
  <div class="content">
  
    
  
	<h1>Evaluación de las Pasantías Profesionales</h1> 
 
    <table width="100%" border="1" bordercolor="#000000" rules="all">
      <tr>
        <th  colspan="2" align="center" bgcolor="#999999">Datos de las Pasantías Profesionales</th>
        <th  colspan="2" align="center" bgcolor="#999999">Datos de la Presentación Pública</th>
      </tr>
      <tr>
        <td align="left">Nombres y Apellidos: '.$Nombre_alumno.'</td>
        <td align="left">C.I: '.$Cedula_alumno.'</td>
        <td rowspan="2" align="left" width="150px">Fecha: '.$Fecha_presentacion.'</td>
        <td rowspan="2" align="left" width="250px">Lapso Académico: '.$L_academico.'</td>
      </tr>
      <tr>
        <td colspan="2" align="left">Empresa u Organismo: '.$Nombre_empresa.'</td>
      </tr>
    </table>
    
   
    <p>Título: <strong>'.$Titulo_TAP.'</strong></p>
    
    
    
    <table width="100%" border="1" bordercolor="#000000" rules="all">
      <tr>
        <th align="center" bgcolor="#999999">Etapa de Pasantía</th>
        <th align="center" bgcolor="#999999">Aspecto a evaluar</th>
        <th colspan="4" align="center" bgcolor="#999999">Tutor</th>
        <th align="center" bgcolor="#999999">Ponderación  (5)</th>
        <th align="center" bgcolor="#999999" width="10%">Total</th>
      </tr>
      <tr>
        <td rowspan="2">Etapa de Permanencia (50%)</td>
        <td font-size="8pt">Evaluación académica en la empresa (Tutor académico)</td>
        <td colspan="3">Prof.(a) <strong>'.$Nombre_tutor.'</strong></td>
        <td>Nota:</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Evaluación tutor externo</td>
        <td colspan="3"><strong>'.$Nombre_TutorE.'</strong></td>
        <td>Nota:</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="2"></td>
        <td>Tutor (1)</td>
        <td>Jurado 1 (2)</td>
        <td>Jurado 2 (3)</td>
        <td>Promedio[(1) + (2) + (3) ] /3</td>
        <td bgcolor="#999999"></td>
        <td bgcolor="#999999"></td>
      </tr>
      <tr>
        <td rowspan="2">Etapa de Culminación (50%)</td>
        <td>Documento Final</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Defensa</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="6" align="right">Calificación Final</td>
        <td></td>
        <td bgcolor="#999999"></td>
      </tr>
    </table>    

    <br><br><br><br><br>
    <table width="100%" border="1" bordercolor="#000000" rules="all">
      <tr>
        <th scope="col"  align="center">Prof.(a)'.$Nombre_tutor.'</th>
        <th scope="col"  align="center">Prof.(a)'.$Nombre_Jurado_1.'</th>
        <th scope="col"  align="center">Prof.(a)'.$Nombre_Jurado_2.'</th>
      </tr>
      <tr>
        <td  align="center"  bgcolor="#999999">Tutor</td>
        <td  align="center"  bgcolor="#999999">Jurado 1</td>
        <td  align="center"  bgcolor="#999999">Jurado 2</td>
      </tr>
    </table>

    <!-- end .content --></div>
  <div class="footer">
    <HR width=100% align="center"> 
    <p align="center">Edificio Administrativo: Avda. Universidad - Paramillo, Teléfono: 530422,  Apartado: 436 , San Cristóbal, Estado Táchira.
    <br>Oficina de Enlace: Parque Central Edificio Catuche. Nivel de Oficinas 1 – Oficinas 111 – 112.
    <br>Teléfono: 577-12-16 – Fax: 577-00-80 Caracas – Distrito Federal, Venezuela.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
';
echo $html;

?>