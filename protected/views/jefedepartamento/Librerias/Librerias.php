<?php 
	session_start();
	function devolver_fecha($fech){
		$vector = split("-",$fech);
		$resul = $vector[2]."/".$vector[1]."/".$vector[0];
		return $resul;
	}
	function convertir_decimal($valor){
		$result = number_format($valor,2,",",".");
		return $result;
	}
	function convertir_float($valor){
		$vector = split(",",$valor);
		$result = $vector[0].".".$vector[1];
		return $result;
	}
	function mostrar_error($mensaje){		
		echo '<script language="JavaScript" type="text/javascript">
		var mensaj = "'.$mensaje.'";
		alert(mensaj);
		</script>';		
	} 

	function cambiar_pagina($pagina){
		echo'<script language="JavaScript" type="text/javascript">
		var pag = "'.$pagina.'";
		document.location = pag;
		</script>';		
	}
	function mostrar_fin(){
		mostrar_error("Sus Datos han sido guardados exitosamente!");
	}
	function mostrar_inicio(){
		mostrar_error("Debe iniciar sesion!");
	}
	function mostrar_privilegios(){
		mostrar_error("No tiene los suficientes privilegios para acceder a esta pagina");
	}
	
	function cerrar_ventana(){
		echo'<script language="JavaScript" type="text/javascript">
		window.close();			
		</script>';		
	}
	function recargar(){
		echo'<script language="JavaScript" type="text/javascript">
		location.reload();			
		</script>';		
	}
	function validar_acceso($tipo){
		if (!isset($_SESSION["USUARIO"])|| !isset($_SESSION["TIPO"])){
			mostrar_inicio();
			cambiar_pagina("index.php");
			return;
		}
		if ($tipo==-1){
			return;
		}
		if ($_SESSION["TIPO"]!=$tipo){
			mostrar_privilegios();
			cambiar_pagina("csesion.php");
			return;
		}
	}


	function conectar($usuario,$clave, $basedatos){
		$servidor = "localhost";
		$link = mysql_connect($servidor,$usuario,$clave);
		if (!$link){
			mostrar_error("NO SE PUEDE CONECTAR CON EL SERVIDOR DE LA BASE DE DATOS");
			die();
		}
		if (mysql_select_db($basedatos,$link)){
			return $link;
		}else{
			mostrar_error("BASE DE DATOS NO DISPONIBLE");
			die();
		}	
		
	}
	function guardar_bitacora($usuario,$accion, $tipo){
		$link = conectar();
		$sql = "insert into bitacora values('0','".$usuario."',curdate(),curtime(),'".$accion."','".$tipo."')";
		$res = mysql_query($sql,$link);
		if (!$res){
			mostrar_error("Error al Almacenar en la Bitacora");
		}
		mysql_close($link);
	}
	function tipo_usuario($tipo){
		if ($tipo==1)
			return "ADMINISTRADOR";
		if ($tipo==2)
			return "SUPERVISOR";
		if ($tipo==3)
			return "REGISTRADOR";
		if ($tipo==4)
			return "INVITADO";
		if ($tipo==5)
			return "SUPERUSUARIO";
		return "NO ESPECIFICADO";
	}
	function estado_usuario($tipo){
		if ($tipo==1)
			return "ACTIVADO";
		return "DESACTIVADO";
	}
	function devolver_estado($usu){
		$sql = "Select Activo from usuarios where (Login='".$usu."')";
		if ($fila = mysql_fetch_array(consultar($sql))){
			return $fila[0];
		}
		return -1;
	}
	function cambiar_estado($usu){
		$estado = devolver_estado($usu);
		if ($estado==-1){
			guardar_bitacora($_SESSION["USUARIO"],"Intento cambiar el Estado de la Cuenta ".$usu);
			mostrar_error("Error al intentar cambiar de estado");
			return;
		}
		$nuevo_estado = 0;
		if ($estado==0)
			$nuevo_estado = 1;
		$sql = "update usuarios set Activo='".$nuevo_estado."' where Login='".$usu."'";
		actualizar($sql,"se realizo el cambio de estado de ".$usu,'2');
	}
	function reiniciar_contra($usu){
		$contra = "123456";
		$clave = conversion($contra);
		$sql = "update usuarios set Contra='".$clave."' where Login='".$usu."'";
		if (actualizar($sql,"se reinicio la contrasena de ".$usu,'2')==1){
			mostrar_error("Su nueva contraseña es ".$contra."\nDebe Cambiarla al iniciar su sesion");
		}
	}
	function consultar($sql){
		$link = conectar();
		$res = mysql_query($sql,$link);
		return $res;
	}
	function actualizar($sql,$mensaje,$tipo){
		$link = conectar();
		$res = mysql_query($sql,$link);
		mysql_close($link);
		if ($res){
			guardar_bitacora($_SESSION["USUARIO"],$mensaje,$tipo);
			mostrar_fin();
			return 1;
		}
		guardar_bitacora($_SESSION["USUARIO"],"No ".$mensaje,$tipo);
		mostrar_error("No ".$mensaje);		
		return 0;
	}
	function actualizar_sinmensaje($sql,$mensaje,$tipo){
		$link = conectar();
		$res = mysql_query($sql,$link);
		mysql_close($link);
		if ($res){
			guardar_bitacora($_SESSION["USUARIO"],$mensaje,$tipo);
			return 1;
		}
		guardar_bitacora($_SESSION["USUARIO"],"No ".$mensaje,$tipo);
		return 0;
	}
	function actualizar_masa($sql,$mensaje,$tipo,$link2){
		$res = mysql_query($sql,$link2);
		$sql = "insert into bitacora values('0','".$_SESSION["USUARIO"]."',curdate(),curtime(),'".$mensaje."','".$tipo."')";
		$res = mysql_query($sql,$link2);
	}
	function actualizar_y_dar_id($sql,$mensaje,$tipo,$tabla){
		$link = conectar();
		$res = mysql_query($sql,$link);
		$id = 0;
		if ($res){
			$sql = "select LAST_INSERT_ID() from ".$tabla;
			$res = mysql_query($sql,$link);
			if ($fila = mysql_fetch_array($res)){
				$id = $fila[0];	
				guardar_bitacora($_SESSION["USUARIO"],$mensaje." ".$id,$tipo);
				mostrar_fin();
			}else{
				mostrar_error("No ".$mensaje);
			}
		}
		return $id;
	}
	function actualizar_y_dar_idsinmensaje($sql,$mensaje,$tipo,$tabla){
		$link = conectar();
		$res = mysql_query($sql,$link);
		$id = 0;
		if ($res){
			$sql = "select LAST_INSERT_ID() from ".$tabla;
			$res = mysql_query($sql,$link);
			if ($fila = mysql_fetch_array($res)){
				$id = $fila[0];	
				guardar_bitacora($_SESSION["USUARIO"],$mensaje." ".$id,$tipo);
			}else{
			}
		}
		return $id;
	}
	function insertar($sql,$mensaje, $tipo){
		return actualizar($sql,$mensaje, $tipo);
	}
	function consultar_linea($sql){
		return ($fila = mysql_fetch_array(consultar($sql)));
	}
	function verificar_existencia($sql){
		if ($fila= mysql_fetch_array(consultar($sql))){
			return true;
		}
		return false;
	}
?>