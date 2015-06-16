function verifica () {
	var login = document.getElementById("email").value;
	var senha = document.getElementById("pwd").value;
	var valido;

	if(!login || login == ""){
		$("#alertlogin").fadeIn();
		valido = false;
	}

	if(!senha || senha == ""){
		$("#alertsenha").fadeIn();
		valido = false;
	}


	return valido;
}

$(document).ready(function(){
	$("#hidelogin").click(function(){
		$("#alertlogin").fadeOut();
	});
	$("#hidesenha").click(function(){
		$("#alertsenha").fadeOut();
	});

	$("#email").keypress(function(){
		$("#alertlogin").fadeOut();
	});
	$("#pwd").keypress(function(){
		$("#alertsenha").fadeOut();
	});
});
