/* Arquivo JavaScript */


function validacao(){
	if (document.cadastro.nome.value==""||document.cadastro.email.value=="" || document.cadastro.senha==""){
		alert("Preencha os campos para ser cadastrado!");
		document.cadastro.nome.focus();
    	document.cadastro.email.focus();
		document.cadastro.senha.focus();
		return false;
	}
	if (document.cadastro.senha.value.length < 8) {
		alert("A senha tem que ter no minimo 8 caracteres!");
		document.form.senha.value.focus();
		return false;
	}
	if (document.cadastro.senha.value.length > 10){
		alert("A senha nao pode ter mais de 10 caracteres.");
		document.cadastro.senha.value.focus();
		return false;
	}

}