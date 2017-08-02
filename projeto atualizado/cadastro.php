
<!DOCTYPE html>
<html>
    <head>
        <META charset="UTF-8"> 
        <title>Clube do Livro </title>
        <link href="css/clube.css" rel="stylesheet">
        <script type="text/javascript">
            function validacao(){
                if (document.cad.nome.value=="") {
                    alert( "Verifique o campo nome.");
                    document.cad.nome.focus();
                    return false;
                }
            } 
        </script>
        <style>
 label{
 display: block;
 }
 </style>
    </head>

    <body class="fundo">
    
        
    	       
  
  

<form name="cad" method="post" action="cadastrando.php" onsubmit="validacao()">

<fieldset style="width: 50px; margin: 0 auto;margin-top: 180px; padding: 10px 10px 10px 10px;">
 <legend class="Tamletra">Cadastro Usuário</legend>
<label>Nome</label>
            <input type="text"  name="nome"  placeholder="Nome" required>
            <br><br>
                    
<label>Email</label>

            <input type="text"  name="email" placeholder="Email" required>
            <br><br>
<label>Senha</label>
	          <input type="password"  name="senha" placeholder="Senha" required>
            <br><br>
               
  

                <input type="submit" name="butao" Value="Cadastrar">
                <input type="reset" value="Limpar">
                <input type="button" value="Voltar" onClick="history.go(-1)"> 
  </form>
        </fieldset>
  </div>
		
		
	</body>
</html>