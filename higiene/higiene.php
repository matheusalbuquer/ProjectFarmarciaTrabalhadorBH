<?php 
session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dermo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Farmácia do Trabalhador BH</title>
</head>
<body>
    <header>

        <div class="header-conteiner">

            <img src="img-medicamentos/logo.png" alt="" class="logotipo">


            <div class="procurar">
                <input type="search" id="pesquisar" placeholder="O que você procura?">   
                <i class="fa-solid fa-magnifying-glass" style="color: #464646cc;"></i>          
            </div>

          <div class="header-outros">

   

            <div id="cesta" class="outros">
                <button class="cestinha" onclick="abrirCestinha()">
                    <img src="img-medicamentos/icone-cestinha.png" alt="imagem de uma cesta">
                    <p>Meu carrinho</p>
                </button>
            </div>

          </div>

        </div>

    </header>
    <section id="navegacao">
        <div class="navegacao-conteiner">
            <h2>
                Categorias
            </h2>
            <nav>
                <ul>

                  
                    <li>
                        <a href="../index.php">
                            <i class="fa-solid fa-house"></i>
                        </a>
                    </li>
                    <li>
                        <a href="../infantil/infantil.php">
                            Infantil
                        </a>
                    </li>

                    <li>
                        <a href="../dermocosmeticos/dermo.php">
                            Dermocosméticos
                        </a>
                    </li>
                    <li>
                        <a href="../medicamentos/medicamentos.php">
                            Medicamentos e Saúde
                        </a>
                    </li>

                    <li>
                        <span class="cor-infantil">
                        <a href="../higiene/higiene.php">
                            Higiene e Beleza
                        </a>
                        </span>
                    </li>



                </ul>
            </nav>
        </div>
    </section>

    <section id="principal">
   



    <section class="cetinhaAberta">

        <div class="cestinha-conteiner">

            <div class="topo-cestinha">

                <p>
                    Seu carrinho
                </p>

                <button id="fecharCestinha" onclick="fechandoCesta()">
                    X
                </button>

            </div>

            <div class="meio-cestinha">

            <div class="cesta-vazia">

            <img class="cesta-icone" src="https://img.icons8.com/?size=100&id=vp8QBEu8vmJX&format=png&color=000000" alt="">
                <p>Eita!</p><br>
                <p>Seu carrinho 
                    Está vazio!
                    
            </div>

                </p>
              <div class="produto-cestinha">

              
                <?php 
                 $sub = 0;
                 if (!isset($_SESSION['carrinho'])) {
                     // Se o carrinho não existir, inicializa como um array vazio
                     $_SESSION['carrinho'] = array();
                 }
                 
                 foreach ($_SESSION['carrinho'] as $key => $value) {
                    
                     echo   $value['nome']. '<br> Quantidade: '.$value['quantidade'].'<br> <br> TOTAL: R$'.($value['quantidade']*$value['preco']);
                 // Verifica se o array 'carrinho' existe na sessão
                 $sub += $value['preco'] * $value['quantidade'];

                ?>
                 <div class="mais">
            
                    
                    <a class="fi fi-rr-octagon-plus"  href="?remover=<?php echo $key ?>">-</a>
                    <a class="fi fi-rr-octagon-plus" href="?finalizar=<?php echo $key ?>"><i class="fa-solid fa-trash"></i></a>
                    <a class="fi fi-rr-octagon-plus" href="?adicionar=<?php echo $key ?>">+</a>
                </div>

                  <?php 
                  
                  }?>

                  </div>
            </div>

            <div class="subtotal">

                <div class="sb-conteiner">

                <p>Subtotal</p>

                <a > R$ <?php echo number_format($sub,2,',','.');?> </a>

            </div>

        </div>

                <div class="finalizandocompra-conteiner">
                <a href="./enviarWhats.php" class="finalizandocompra">FINALIZAR COMPRA</a>
                </div>


        </div>

    </section>

    <div class="img-infantil">

<img src="./img-medicamentos/imagem-higiene.png" alt="">

</div>

<section id="produtos-infantis">



<div class="filtros-infantis">
    <div class="texto-filtro-infantil">
        <h3>
            HIGIENE E BELEZA
        </h3>
    </div>
    
    <div class="marcas-filtro">
    <div class="filtrar-marcas"> 
    <label for="dove">Dove</label>
            <input type="checkbox" name="dove" id="dove">
            </div>

            <div class="filtrar-marcas">
            <label for="nivea">Nivea</label>
            <input type="checkbox" name="nivea" id="nivea">
            </div>

            <div class="filtrar-marcas">
            <label for="lux">Lux</label>
            <input type="checkbox" name="lux" id="lux">
            </div>

            <div class="filtrar-marcas">
            <label for="risque">Risqué</label>
            <input type="checkbox" name="risque" id="risque">
            </div>

            <div class="filtrar-marcas">
            <label for="salonline">Salon Line</label>
            <input type="checkbox" name="salonline" id="salonline">
            </div>

            <div class="filtrar-marcas">
            <label for="vult">Vult</label>
            <input type="checkbox" name="vult" id="vult">
            </div>

            <div class="filtrar-marcas">
            <label for="eudora">Eudora</label>
            <input type="checkbox" name="eudora" id="eudora">
            </div>


            <div class="filtrar-marcas">
            <label for="seda">Seda</label>
            <input type="checkbox" name="seda" id="seda">
            </div>

            <div class="filtrar-marcas">
            <label for="colgate">Colgate</label>
            <input type="checkbox" name="colgate" id="colgate">
            </div>

            <div class="filtrar-marcas">
            <label for="oralb">Oral B</label>
            <input type="checkbox" name="oralb" id="oralb">
            </div>

            <div class="filtrar-marcas">
            <label for="rexona">Rexona</label>
            <input type="checkbox" name="rexona" id="rexona">
            </div>

            <div class="filtrar-marcas">
            <label for="gilette">Gilette</label>
            <input type="checkbox" name="gilette" id="gilette">
            </div>

            <div class="filtrar-marcas">
            <label for="lola">Lola Cosmetics</label>
            <input type="checkbox" name="lola" id="lola">
            </div>

            <div class="filtrar-marcas">
            <label for="herbissimo">Herbíssimo</label>
            <input type="checkbox" name="herbissimo" id="herbissimo">
            </div>

            <div class="filtrar-marcas">
            <label for="protex">Protex</label>
            <input type="checkbox" name="protex" id="protex">
            </div>

            <div class="filtrar-marcas">
            <label for="granado">Granado</label>
            <input type="checkbox" name="granado" id="granado">
            </div>

            <div class="filtrar-marcas">
            <label for="pantene">Pantene</label>
            <input type="checkbox" name="pantene" id="pantene">
            </div>
    
    </div>


   
    <div class="filtrar-preco">
        <div class="precos-filtrados">

        <label for="preco-um">R$ 0,00 - 24,99</label>
        <input id="preco-um" type="checkbox">

        </div>

        <div class="precos-filtrados">

        <label for="preco-dois">R$ 25,00 - 59,99</label>
        <input id="preco-dois" type="checkbox">

        </div>

        <div class="precos-filtrados">

        <label for="preco-tres">R$ 60,00 - 99,99</label>
        <input id="preco-tres" type="checkbox">

        </div>

        <div class="precos-filtrados">

        <label for="preco-quatro">R$ 100,00 - 149,99</label>
        <input id="preco-quatro" type="checkbox">

        </div>

        <div class="precos-filtrados">

        <label for="preco-cinco">R$ 150,00 - 199,99</label>
        <input id="preco-cinco" type="checkbox">

        </div>
                    
    </div>


</div>
<div class="listaprodutos-infantis">


            <?php 
    /* Array que adiciona objeto nas div's*/
    $itens = array(
        ['id'=> 1,'nome' => 'Desodorante Dove Original  
                     Aerosol 250ml' , 'preco' => 23.99, 'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/703630-800-auto?v=638290838358270000&width=800&height=auto&aspect=true'],
            ['id'=> 2,'nome' => 'Desodorante Anitranspirante
                      Rexona...' , 'preco' => 16.99 ,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/931398-800-auto?v=638621709004970000&width=800&height=auto&aspect=true'],
            ['id'=> 3,'nome' => 'Shampoo Eudora
                    Siàge Nutri Rosé 400ml' , 'preco' => 68.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/884168-800-auto?v=638530327764130000&width=800&height=auto&aspect=true'],
            ['id'=> 4,'nome' => 'Creme Facial Vult
                    Nutritivo 7em1 100g' , 'preco' => 27.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/650811-800-auto?v=638008854112630000&width=800&height=auto&aspect=true'],
            ['id'=> 5,'nome' => 'Aparelho de Barbear Gilette
                    Mach3 Sensitive' , 'preco' => 28.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/909781-800-auto?v=638569167458870000&width=800&height=auto&aspect=true'],
            ['id'=> 6,'nome' => 'Kit 4 Aparelhos Descartáveis
                    Para Dep...' , 'preco' => 42.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/833433-800-auto?v=638486388439800000&width=800&height=auto&aspect=true'],
            ['id'=> 7,'nome' => 'Sabonete Lux Botanicals<br>
                    Rosas Francesas 125g' , 'preco' => 3.49,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/646233-800-auto?v=638008095795830000&width=800&height=auto&aspect=true'],
            ['id'=> 8,'nome' => 'Creme Dental Para<br>
                    Gengivite Colgate...' , 'preco' => 15.97,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/836747-800-auto?v=638490384128870000&width=800&height=auto&aspect=true'],
            ['id'=> 9,'nome' => 'Kit Pantene sh 
                    Restauracao 350ml +...' , 'preco' => 30.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/717328-800-auto?v=638324712233930000&width=800&height=auto&aspect=true'],
            ['id'=> 10,'nome' => 'Esmalte Risque Doritos
                    Sou Topping 8Ml' , 'preco' => 8.49,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/932993-800-auto?v=638626857522100000&width=800&height=auto&aspect=true'],
            ['id'=> 11,'nome' => 'Cr Pent Salon Line
                    Sos Nut 1kg' , 'preco' => 39.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/903149-800-auto?v=638551213520630000&width=800&height=auto&aspect=true'],
            ['id'=> 12,'nome' => 'Sabonete em Barra Protex
                    Cream 85g' , 'preco' => 4.09,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/643106-800-auto?v=638008052432030000&width=800&height=auto&aspect=true'],
            ['id'=> 13,'nome' => 'Oral-B Indicador Black
                    Charcoal Esco...' , 'preco' => 25.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/695624-800-auto?v=638258239561700000&width=800&height=auto&aspect=true'],
            ['id'=> 14,'nome' => 'Kit Creme Dental
                    Oral-b 3d White com 3 unida...' , 'preco' => 19.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/322920-800-auto?v=637662919941630000&width=800&height=auto&aspect=true'],
            ['id'=> 15,'nome' => 'Máscara Disciplinante Lola
                    Cosmetics Xapa...' , 'preco' => 20.94,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/880997-800-auto?v=638525117250970000&width=800&height=auto&aspect=true'],
            ['id'=> 16,'nome' => 'Sabonete Barra Granado
                    Tratamento...' , 'preco' => 7.59,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/638337-800-auto?v=638007988073770000&width=800&height=auto&aspect=true'],
            ['id'=> 17,'nome' => 'NIVEA Loção Hidratante
                    Milk Pele Seca a Extra...' , 'preco' => 20.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/690398-800-auto?v=638216772257600000&width=800&height=auto&aspect=true'],
            ['id'=> 18,'nome' => 'Desodorante Herbissimo
                    Tradicional Creme 55g' , 'preco' => 5.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/824313-800-auto?v=638461242333630000&width=800&height=auto&aspect=true'],
            ['id'=> 19,'nome' => 'Shampoo Pantene
                    Bambu 200ml' , 'preco' => 12.29,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/645781-800-auto?v=638008090117430000&width=800&height=auto&aspect=true'],
            ['id'=> 20,'nome' => 'Sérum Hidratante corporal
                    Dove niaci...' , 'preco' => 49.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/884790-800-auto?v=638531100779270000&width=800&height=auto&aspect=true'],
    );

    foreach ($itens as $key => $value) {
        
    ?>
   
   
    
        <!-- Essa é a caixa de cada produto, se voce quiser adicionar algum produto, e so por na constante acima!  -->
        <div class="produtos-mais-vendidos">

 
                <div class="sobreproduto">
                <img src="<?php echo $value['img']?>" alt="">
      

                <p>
                   <?php echo $value['nome']?>
                      </p>
  
                </div>
      
              
 


                <strong>
                <?php echo 'R$: '.$value['preco']?>
                </strong>
   

          
                <a class="verproduto"  href="?adicionar=<?php echo $key ?>">ADICIONAR PRODUTO</a>
       
    </div>
    
   
    <?php 
    }
    ?>
</div>
    </section>

    <section id="rodape">
        <footer>
            <div class="rodape-conteiner"> 
                

                <div class="rodape-infos">
                    <h3>Informações</h3>
                    <ul>
                        <li>
                                Telefone: (81) 3097-4482
                        </li>
                        <li><a href="https://www.google.com/maps/place/R.+Bomba+do+Hemet%C3%A9rio,+155+-+Bomba+do+Hemet%C3%A9rio,+Recife+-+PE,+52111-070/@-8.0234711,-34.8985253,15z/data=!4m5!3m4!1s0x7ab184ed9c0e773:0x6bb255f982a4bb5!8m2!3d-8.0234711!4d-34.8985253?hl=pt-br" target="_blank">Localização</a></li>
                    </ul>
                </div>

                <div class="lista-redes-socias">
                    <h3>Redes Sociais</h3>
                    <ul class="social-links">
                        <li> 
                            <i class="fa-brands fa-instagram" style="color: #fff;"></i>

                            <a href="">Instagram</a>
                        </li>


                        <li>
                            <i class="fa-brands fa-whatsapp" style="color: #fff;"></i>

                            <a href="">
                                WhatsApp</a>
                            </li>
                    </ul>
                </div>
            </div>

        <p>&copy; 2024 Fármacia do Trabalhador BH. Todos os direitos reservados</p>
        </footer>

    </section>


    <script src="./dermo.js"></script>

    <?php 
        include_once "../funcoesphp/adicionar.php";
        include_once "../funcoesphp/remover.php";
        include_once "../funcoesphp/esvaziar.php";
    ?>
    
</body>

<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event){
        if(event.key === "Enter"){
            searchData();
        }
    });

    function searchData(){
        window.Location = 'index.php?search=' + search.value;
    }
</script>
</html>