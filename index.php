<?php
    require (' ./bd/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
     <head>
	      <meta charset= "UTF-8">
		  <title>Full Stack Eletro</title>
		  <link rel="stylesheet" href="./css/estilo.css">
		  </head>
		  <body>
              	 <!-- Início do Menu -->
                 <?php require_once('menu.html'); ?>
                 <!-- Fim do Menu -->
				    <main>
						<H1>Seja bem vindo(a)!</H1>
						 <p>Aqui em nossa loja, <strong>programadores tem desconto</strong> nos produtos para sua casa!</p>
					</main>
					<br><br>
					<!-- Início do footer -->
                    <?php require_once('rodape.html'); ?>
                    <!-- Fim do footer -->		 
         </body>
</html>