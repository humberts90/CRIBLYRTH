// JavaScript Document
function mueve_reloj(){
	var momento_actual = new Date();
	var hor = momento_actual.getHours();
	var minuto = momento_actual.getMinutes();
	var segundo = momento_actual.getSeconds();
	var hora, minutos, segundos;
	var dia =  momento_actual.getDate();
	var mes = momento_actual.getMonth()+1;
	var ano = momento_actual.getFullYear();
	var dias, meses, anos;
	if (hor<10)
		hora = "0"+hor;
	else
		hora = hor;
	if (minuto<10)
		minutos = "0"+minuto;
	else
		minutos = minuto;
	if (segundo<10)
		segundos = "0"+segundo;
	else
		segundos = segundo;
	if (dia<10)
		dias = "0"+dia;
	else	
		dias = dia;
	if (mes<10)
		meses = "0"+mes;
	else
		meses = mes;
	anos = ano;
	var hora_mostrar = hora +":"+ minutos +":" +segundos;
	var fecha_mostrar = dias+"/"+meses+"/"+anos;
	document.getElementById("hora").innerHTML = hora_mostrar;
	document.getElementById("fecha").innerHTML = fecha_mostrar;
	setTimeout("mueve_reloj()",1000);
}
function redirigir(pagina){
		document.location = pagina;
}
function recargar(){
		location.reload();
}
function abrir_emergente (pagina, alto, ancho) {
	var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=ancho, height=alto, 	top=85, left=140";
	window.open(pagina,"",opciones);
}
function cerrar_ventana(){
		window.close();
}

