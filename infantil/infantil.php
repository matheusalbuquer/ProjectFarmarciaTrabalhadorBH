<?php 
session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="infantil.css">
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
                        <span class="cor-infantil">

                        <a href="../infantil/infantil.php">
                            Infantil
                        </a>

                        </span>
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
                        <a href="../higiene/higiene.php">
                            Higiene e Beleza
                        </a>
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

<img src="./img-medicamentos/imagem-infantil.png" alt="">

</div>

<section id="produtos-infantis">



<div class="filtros-infantis">
    <div class="texto-filtro-infantil">
        <h3>
            INFANTIL
        </h3>
    </div>
    
    <div class="marcas-filtro">
    <div class="filtrar-marcas"> 
    <label for="huggies">Huggies</label>
    <input type="checkbox" name="huggies" id="huggies">
    </div>

    <div class="filtrar-marcas">
    <label for="pampers">Pampers</label>
    <input type="checkbox" name="pampers" id="pampers">
    </div>

    <div class="filtrar-marcas">
    <label for="mamypoko">Mamypoko</label>
    <input type="checkbox" name="mamypoko" id="mamypoko">
    </div>

    <div class="filtrar-marcas">
    <label for="lillo">Lillo</label>
    <input type="checkbox" name="lillo" id="lillo">
    </div>

    <div class="filtrar-marcas">
    <label for="johnsonsbaby">Johnsons Baby</label>
    <input type="checkbox" name="johnsonsbaby" id="johnsonsbaby">
    </div>

    <div class="filtrar-marcas">
    <label for="granado">Granado</label>
    <input type="checkbox" name="granado" id="granado">
    </div>

    <div class="filtrar-marcas">
    <label for="baruelbaby">Baruel Baby </label>
    <input type="checkbox" name="cetaphil" id="cetaphil">
    </div>


    <div class="filtrar-marcas">
    <label for="pompom">Pom Pom</label>
    <input type="checkbox" name="pompom" id="pompom">
    </div>

    <div class="filtrar-marcas">
    <label for="ninho">Ninho</label>
    <input type="checkbox" name="ninho" id="ninho">
    </div>

    <div class="filtrar-marcas">
    <label for="sustagen">Sustagen</label>
    <input type="checkbox" name="sustagen" id="sustagen">
    </div>

    <div class="filtrar-marcas">
    <label for="aptamil">Aptamil</label>
    <input type="checkbox" name="aptamil" id="aptamil">
    </div>

    <div class="filtrar-marcas">
    <label for="kukababy">Kuka Baby</label>
    <input type="checkbox" name="kukababy" id="kukababy">
    </div>

    <div class="filtrar-marcas">
    <label for="nestogeno">Nestogeno</label>
    <input type="checkbox" name="nestogeno" id="nestogeno">
    </div>

    <div class="filtrar-marcas">
    <label for="neslac">Neslac</label>
    <input type="checkbox" name="neslac" id="neslac">
    </div>

    <div class="filtrar-marcas">
    <label for="nanlac">Nanlac</label>
    <input type="checkbox" name="nanlac" id="nanlac">
    </div>

    <div class="filtrar-marcas">
    <label for="babymed">Babymed</label>
    <input type="checkbox" name="babymed" id="babymed">
    </div>

    <div class="filtrar-marcas">
    <label for="avant">Avant</label>
    <input type="checkbox" name="avant" id="avant">
    </div>

    <div class="filtrar-marcas">
    <label for="nuk">Nuk</label>
    <input type="checkbox" name="nuk" id="nuk">
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
        ['id'=> 1,'nome' => ' Composto Lácteo NINHO Zero 
                    Lactose Lata 700g    ' , 'preco' => 35.49, 'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/902891-1200-auto?v=638551188953300000&width=1200&height=auto&aspect=true'],
            ['id'=> 2,'nome' => 'Fralda Huggies Roupinha
                    Supreme... ' , 'preco' => 117.49 ,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/927655-1200-auto?v=638612255435570000&width=1200&height=auto&aspect=true'],
            ['id'=> 3,'nome' => 'Sabonete Líquido Johnsons
                    Super Poder...' , 'preco' => 18.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/725361-1200-auto?v=638338388418630000&width=1200&height=auto&aspect=true'],
            ['id'=> 4,'nome' => 'Fraldas Pampers Supersec
                    P 34 unidades' , 'preco' => 41.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/644070-800-auto?v=638008067063530000&width=800&height=auto&aspect=true'],
            ['id'=> 5,'nome' => 'Fralda Pom Pom Protek<br>
                    Grandinhos 14 unidades' , 'preco' => 2899,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/907739-800-auto?v=638565571719170000&width=800&height=auto&aspect=true'],
            ['id'=> 6,'nome' => 'Sustagen Kids Sabor Baunilha
                    Lata 350g' , 'preco' => 36.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/826776-800-auto?v=638469858952670000&width=800&height=auto&aspect=true'],
            ['id'=> 7,'nome' => 'Aspirador Nasal Lilo<br>
                    Rosa' , 'preco' => 18.79,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/631141-800-auto?v=637940592655900000&width=800&height=auto&aspect=true'],
            ['id'=> 8,'nome' => 'Babymed Tratamento<br>
                    Pomada 60g' , 'preco' => 26.60,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/646868-800-auto?v=638008103779070000&width=800&height=auto&aspect=true'],
            ['id'=> 9,'nome' => 'Shampoo Baruel Baby Sono
                    Tranquilo 400g' , 'preco' => 19.79,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/907653-800-auto?v=638564931728700000&width=800&height=auto&aspect=true'],
            ['id'=> 10,'nome' => 'Colônia Huggies infantil Extra
                    Suave 100ml' , 'preco' => 15.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/912207-800-auto?v=638579616315900000&width=800&height=auto&aspect=true'],
            ['id'=> 11,'nome' => 'Shampoo Granado Bebê<br>
                    Tradicional 250ml' , 'preco' => 18.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/639258-800-auto?v=638008000859270000&width=800&height=auto&aspect=true'],
            ['id'=> 12,'nome' => 'Fralda Calça Mamypoko Giga G
                    60 unidades' , 'preco' => 35.49,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/940659-800-auto?v=638642988395930000&width=800&height=auto&aspect=true'],
            ['id'=> 13,'nome' => 'Fórmula Infantil Nestogeno 1
                    800g' , 'preco' => 55.49,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/891878-800-auto?v=638533612728730000&width=800&height=auto&aspect=true'],
            ['id'=> 14,'nome' => 'Fórmula Infantil Aptamil<br>
                    Premium 2 800g' , 'preco' => 70.49,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/906624-800-auto?v=638563302146970000&width=800&height=auto&aspect=true'],
            ['id'=> 15,'nome' => 'Chupeta Kuka Lumina Orto
                    Tamanho 2 Azul' , 'preco' => 18.29,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/894972-800-auto?v=638538787791270000&width=800&height=auto&aspect=true'],
            ['id'=> 16,'nome' => 'Mamadeira Nuk My First Boy
                    150ml' , 'preco' => 46.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/644109-800-auto?v=638008067586930000&width=800&height=auto&aspect=true'],
            ['id'=> 17,'nome' => 'Fraldas Pampers Supersec G
                    80 unidades' , 'preco' => 95.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/647471-800-auto?v=638008111171270000&width=800&height=auto&aspect=true'],
            ['id'=> 18,'nome' => 'Shampoo Johnsons Baby
                    Glicerina 400ml' , 'preco' => 20.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/935723-800-auto?v=638633799245800000&width=800&height=auto&aspect=true'],
            
            ['id'=> 19,'nome' => 'Kit Composto Lácteo Neslac
                    Comfor 1,6kg' , 'preco' => 112.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/886792-800-auto?v=638532183876430000&width=800&height=auto&aspect=true'],
            ['id'=> 20,'nome' => 'Leite Em Pó Ninho<br>
                    Integral 380g' , 'preco' => 17.42,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/927056-800-auto?v=638612248688370000&width=800&height=auto&aspect=true'],
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