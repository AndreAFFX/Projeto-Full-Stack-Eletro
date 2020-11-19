<?php
    require ('./bd/conexao.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
     <head>
	      <meta charset= "UTF-8">
          <title>Produtos - Full Stack Eletro</title>
          <link rel="stylesheet" href="./css/estilo.css">
          <script src="js/funções.js"></script>
		  </head>
		  <body>
                <!-- Início do Menu -->
                <?php require_once('menu.html'); ?>
                <!-- Fim do Menu -->
            <header>
               <H1>Produtos</H1>
            </header>
               <hr>
                       <div class-"categorias">
                           <h3>Categorias</h3>  
                           <ul>
                               <li onclick="exibir_categoria('geladeira')">Geladeira (3)</li>
                               <li onclick="exibir_categoria('fogão')">Fogão (2)</li>
                               <li onclick="exibir_categoria('micro-ondas')">Micro-ondas (3)</li>
                               <li onclick="exibir_categoria('lavadora de roupas')">Lavadora de Roupas (2)</li>
                               <li onclick="exibir_categoria('lava-louças')">Lava-louças (3)</li>
                           </ul>
                       </div>    
                        
                           <div class="produtos">
                               <div class="box_produto" id="geladeira" style=display:inline-block;>
                                   <img src="./Imagens/produtos/Geladeira/Geladeira Brastemp/geladeirabrastempfrostfree.jpg" width="200px" onclick="destaque(this)">
                                   <br>
                                   <div class="descrição">Geladeira Brastemp Frost free Evox Inverse 540,6Lt</div>
                                   <hr>                                                              
                                   <div class="desconto"><strike>De: R$ 4.249,00</strike></div>
                                   <div class="preço">Por: R$ 3.250,00</div>
                               </div>
                              

                               <div class="box_produto" id="geladeira"style=display:inline-block;>
                                   <img src="./Imagens/produtos/Geladeira/Geladeira Electrolux/geladeira electrolux 2p cycle defrost 260l  branco.jpg" width="200px" onclick="destaque(this)">
                                   <br>
                                   <div class="descrição">Geladeira Electrolux 2p Cycle defrost 260Lt branco</div>
                                   <hr>
                                   <div class="desconto"><strike>De: R$ 3.939,99</strike></div>
                                   <div class="preço">Por: R$ 3.250,00</div>
                               </div>
                                

                               <div class="box_produto" id="geladeira"style=display:inline-block;>
                                   <img src="./Imagens/produtos/Geladeira/Geladeira Panasonic/geladeira-frost-free panasonic-425-litros  2p preto.jpg" width="200px" onclick="destaque(this)">
                                   <br>
                                   <div class="descrição">Geladeira Frost Free Panasonic 425Lt 2p Preto</div>
                                   <hr>                          
                                   <div class="desconto"><strike>De: R$ 3.299,99</strike></div>
                                   <div class="preço">Por: R$ 3.134,05</div>
                               </div>
                                                         

                               <div class="box_produto" id="fogão"style=display:inline-block;>
                                   <img src="./Imagens/produtos/Fogão/Fogão Electrolux/fogão 4 bocas electrolux preto acendimento automático.jpg" width="200px" onclick="destaque(this)">
                                   <br>
                                   <div class="descrição">Fogão 4 Bocas Electrolux Preto Acendimento automático</div>
                                   <hr>                        
                                   <div class="desconto"><strike>De: R$ 299,90</strike></div>
                                   <div class="preço">Por: R$ 259,99</div>
                               </div>
                                
                        
                                <div class="box_produto" id="fogão" style=display:inline-block;>
                                    <img src="./Imagens/produtos/Fogão/Fogão Consul/fogão 5 bocas consul acendimento automático inox.jpg" width="200px" onclick="destaque(this)">
                                    <br>
                                    <div class="descrição">Fogão 5 Bocas Consul Acendimento automático</div>
                                    <hr>                  
                                    <div class="desconto"><strike>De: R$ 599,90</strike></div>
                                    <div class="preço">Por: R$ 399,99</div>
                                </div>
                                

                               <div class="box_produto" id="micro-ondas" style=display:inline-block;>
                                   <img src="./Imagens/produtos/micro-ondas/Micro-ondas Electrolux/micro-ondas electrolux  20l.jpg" width="200px" onclick="destaque(this)">
                                   <br>
                                   <div class="descrição">Micro-ondas Electrolux 20l</div>
                                   <hr>                          
                                   <div class="desconto"><strike>De: R$ 599,90</strike></div>
                                   <div class="preço">Por: R$ 490,00</div>
                               </div>
                                

                               <div class="box_produto" id="micro-ondas" style=display:inline-block;>
                                   <img src="./Imagens/produtos/micro-ondas/Micro-ondas LG/micro-ondas lg solo 30lt prata.jpg" width="200px" onclick="destaque(this)">
                                   <br>
                                   <div class="descrição">Micro-ondas LG solo 30Lt Prata</div>
                                   <hr>                        
                                   <div class="desconto"><strike>De: R$ 625,90</strike></div>
                                   <div class="preço">Por: R$ 590,99</div>
                               </div>
                                

                               <div class="box_produto" id="micro-ondas" style=display:inline-block;>
                                   <img src="./Imagens/produtos/micro-ondas/Micro-ondas Midea/micro-ondas midea branco 20l.jpg" width="200px" onclick="destaque(this)">
                                   <br>
                                   <div class="descrição">Micro-ondas Midea branco 20Lt</div>
                                   <hr>                         
                                   <div class="desconto"><strike>De: R$ 499,99</strike></div>
                                   <div class="preço">Por: R$ 350,90</div>
                               </div>
                                

                               <div class="box_produto" id="lavadora de roupas" style=display:inline-block;>
                                   <img src="./Imagens/produtos/lavadora de roupas/Lavadora de roupas Consul/lavadora de de roupas consul 11kg branca.jpg" width="200px" onclick="destaque(this)">
                                   <br>
                                   <div class="descrição">Lavadora de Roupas Consul 11kg branca</div>
                                   <hr>                         
                                   <div class="desconto"><strike>DE: R$ 1.849,00</strike></div>
                                   <div class="preço">Por: R$ 1.599,90</div>
                               </div>
                                

                               <div class="box_produto" id="lavadora de roupas" style=display:inline-block;>
                                   <img src="./Imagens/produtos/lavadora de roupas/Lavadora de Roupas Electrolux/lavadora electrolux lac13.jpg" width="200px" onclick="destaque(this)">
                                   <br>
                                   <div class="descrição">Lavadora de Roupas Electrolux 11kg branca</div>
                                   <hr>                         
                                   <div class="desconto"><strike>De: R$ 1.600,90</strike></div>
                                   <div class="preço">Por: R$ 1200,00</div>
                               </div>
                                

                               <div class="box_produto" id="lava-louças" style=display:inline-block;>
                                   <img src="./Imagens/produtos/lava-louças/Lava-louças Electrolux/lava-louças branca electrolux.jpg" width="200px" onclick="destaque(this)">
                                   <br>
                                   <div class="descrição">Lava - louças branca Electrolux</div>
                                   <hr>                        
                                   <div class="desconto"><strike>De: R$ 5.082,60</strike></div>
                                   <div class="preço">Por: R$ 4.099,90</div>
                               </div>                           
                               

                               <div class="box_produto" id="lava-louças" style=display:inline-block;>
                                   <img src="./Imagens/produtos/lava-louças/Lava-louças Brastemp/lava-louças brastemp.jpg" width="200px" onclick="destaque(this)">
                                   <br>
                                   <div class="descrição">Lava - louças Brastemp</div>
                                   <hr>                          
                                   <div class="desconto"><strike>De:R$ 4.199,00</strike></div>
                                   <div class="preço">Por: R$ 3.999,90</div>                               
                               </div>
                           </div>
                           <br><br>
					<!-- Início do footer -->
                    <?php require_once('rodape.html'); ?>
                    <!-- Fim do footer -->	
         </body>
</html>	