<?php
	require ('./bd/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
     <head>
	      <meta charset= "UTF-8">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="./css/estilo.css">
		  </head>
		  <body>
            <!-- Início do Menu -->
            <?php require_once('menu.html'); ?>
            <!-- Fim do Menu -->
               <H2>Contato</H2>
               <hr>
               <table border="0" width="100%" cellpadding="20">
                  <tr>
                     <td width="50%" align="center">
                         <img src="./Imagens/Fale Conosco/E-mail/E-mail01.png" width="40px">
                         contato@fullstackeletro.com

                     </td>

                     <td width="50%" align="center">
                        <img src="./Imagens/Fale Conosco/Whatsapp/whatsapp-business-2.jpg" width="80px">
                        (11) 99999-9999</font

                     </td>
                  </tr>
               </table>

         <h4>Nome: </h4>
         <input Type="text" style="width: 400px;">
         <h4>Mensagem: </h4>
         <textarea style="width: 400px;" cols="10" rows="10"></textarea>
      <br> <br> <br> <br> <br>
          <button type="submit" value="Enviar">ENVIAR</button>
          <br> <br>
					     <!-- Início do footer -->
                    <?php require_once('rodape.html'); ?>
                    <!-- Fim do footer -->
  </body>
</html>