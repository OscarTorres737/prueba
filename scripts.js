// JavaScript Document
jQuery('document').ready(function($){
	
	var btnmenu = $('.menu-icon'),
	menu = $('.navegacion ul');
	
	btnmenu.click(function() {
		if(menu.hasClass('show')){
			menu.removeClass('show');
		}else{
			menu.addClass('show');
		}
		
		
	});
	
	
//Creamos un script que nos permita visualizar la contraseña 
var button = document.getElementById('boton');
var input =	document.getElementById('contraseña');

//creamos un evento el cual recibira dos parametros, el 'click' y la funcion mostrar contraseña la  cual se define mas abajo
button.addEventListener('click', mostrarcontraseña);


//En la funcion utilizaremos un condicional if para transformar el tipo password en tipo texto 
function mostrarcontraseña(){
	if(input.type=="password"){
		input.type="text";
		button.src= "imagenes de productos/ocultar.png";
	}else{
		input.type="password";
		button.src="imagenes de productos/eye-png-icon-28.jpg"
	}
}

var button2 = document.getElementById('boton2');
var input2 =	document.getElementById('contraseña2');

//creamos un evento el cual recibira dos parametros, el 'click' y la funcion mostrar contraseña la  cual se define mas abajo
button2.addEventListener('click', mostrarcontraseña2);


//En la funcion utilizaremos un condicional if para transformar el tipo password en tipo texto 
function mostrarcontraseña2(){
	if(input2.type=="password"){
		input2.type="text";
		button2.src= "imagenes de productos/ocultar.png";
	}else{
		input2.type="password";
		button2.src="imagenes de productos/eye-png-icon-28.jpg"
	}
}
	//Cerramos 
	
	
	
	
	
});
