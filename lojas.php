<?php
	require ('./bd/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
     <head>
	      <meta charset= "UTF-8">
      <title>Nossas lojas- Full Stack Eletro</title>
      <link rel="stylesheet" href="./css/estilo.css">
		  </head>
		  <body>
           <!-- Início do Menu -->
           <?php require_once('menu.html'); ?>
           <!-- Fim do Menu -->
               <H2>Nossas lojas</H2>
               <hr>
               <table border=0 widht="100%" cellpadding="10">
                  <tr>
                     <td width="42%" align="center">
                       <h3>Rio de Janeiro</h3>
                       <p>Avenida Presidente Vargas, 5000</p>
                       <p>10 &ordm; andar</p>
                       <p>Centro</p>
                       <p>(21) 3333-3333</p>
                      </td>
                  


                  
                      <td width="44%" align="center">
                        <h3>São Paulo</h3>
                        <p>Avenida Paulista, 985</p>
                        <p>3 &ordm; andar</p>
                        <p>Jardins</p>
                        <p>(11) 4444-4444</p>
                      </td>
                  


                  
                      <td width="30%"align="center">
                        <h3>Santa Catarina</h3>
                        <p>Rua Major ÁVila, 370</p>
                        <p>10 &ordm; andar</p>
                        <p>Vila Mariana</p>
                        <p>(47) 5555-5555</p>
                      </td>
                  </tr>
              </table>
              <br> <br>
					          <!-- Início do footer -->
                    <?php require_once('rodape.html'); ?>
                    <!-- Fim do footer -->
         </body>
</html>