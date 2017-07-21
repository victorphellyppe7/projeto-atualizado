<?php

include("nav/header.php");
?> 




    	       
  
  

<form name="cadastro" method="post" action="cadastrando.php">

 <h1 class="Tamletra">Cadastro Usuário</h1>
<fieldset style="width:50px;">

            <input type="text" size="55" name="nome" size="50" placeholder="Nome">
            <br><br>
                    
        	 
            <input type="text" size="55" name="email" placeholder="Email">
            <br><br>
	        
	          <input type="password" size="55" name="senha" placeholder="Senha">
            <br><br>

            
			
  

                <input type="submit" Value="Cadastrar">
                <input type="reset" value="Limpar">
                <input type="button" value="Voltar" onClick="history.go(-1)"> 
</fieldset>
  </form>
        
  </div>
		
		
	</body>
</html>