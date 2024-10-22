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
                        <span class="cor-infantil">
                        <a href="../dermocosmeticos/dermo.php">
                            Dermocosméticos
                        </a>
                        </span>
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

<img src="./img-medicamentos/dermo-foto.png" alt="">

</div>

<section id="produtos-infantis">



<div class="filtros-infantis">
    <div class="texto-filtro-infantil">
        <h3>
            DERMOCOSMÉTICOS
        </h3>
    </div>
    
    <div class="marcas-filtro">
    <div class="filtrar-marcas"> 
    <label for="la roche posay">La Roche Posay</label>
    <input type="checkbox" name="la roche posay" id="la roche posay">
    </div>

    <div class="filtrar-marcas">
    <label for="vichy">Vichy</label>
    <input type="checkbox" name="vichy" id="vichy">
    </div>

    <div class="filtrar-marcas">
    <label for="nivea">Nivea</label>
    <input type="checkbox" name="nivea" id="nivea">
    </div>

    <div class="filtrar-marcas">
    <label for="neutrogena">Neutrogena</label>
    <input type="checkbox" name="neutrogena" id="neutrogena">
    </div>

    <div class="filtrar-marcas">
    <label for="loreal">Loreal</label>
    <input type="checkbox" name="loreal" id="loreal">
    </div>

    <div class="filtrar-marcas">
    <label for="mantecorp">Mantecorp</label>
    <input type="checkbox" name="mantecorp" id="mantecorp">
    </div>

    <div class="filtrar-marcas">
    <label for="cetaphil">Cetaphil</label>
    <input type="checkbox" name="cetaphil" id="cetaphil">
    </div>


    <div class="filtrar-marcas">
    <label for="sundown">Sundown</label>
    <input type="checkbox" name="Sundown" id="Sundown">
    </div>

    <div class="filtrar-marcas">
    <label for="cicatricure">Cicatricure</label>
    <input type="checkbox" name="cicatricure" id="cicatricure">
    </div>

    <div class="filtrar-marcas">
    <label for="asepxia">Asepxia</label>
    <input type="checkbox" name="asepxia" id="asepxia">
    </div>

    <div class="filtrar-marcas">
    <label for="anthelios">Anthelios</label>
    <input type="checkbox" name="anthelios" id="anthelios">
    </div>

    <div class="filtrar-marcas">
    <label for="loreal paris">Loreal Paris</label>
    <input type="checkbox" name="loreal paris" id="loreal paris">
    </div>

    <div class="filtrar-marcas">
    <label for="neostrata">Neostrata</label>
    <input type="checkbox" name="neostrata" id="neostrata">
    </div>

    <div class="filtrar-marcas">
    <label for="epidrat">Epidrat</label>
    <input type="checkbox" name="epidrat" id="epidrat">
    </div>

    <div class="filtrar-marcas">
    <label for="cerave">Cerave</label>
    <input type="checkbox" name="cerave" id="cerave">
    </div>

    <div class="filtrar-marcas">
    <label for="actine">Actine</label>
    <input type="checkbox" name="actine" id="actine">
    </div>

    <div class="filtrar-marcas">
    <label for="minesol">Minesol</label>
    <input type="checkbox" name="minesol" id="minesol">
    </div>

    <div class="filtrar-marcas">
    <label for="episol">Episol</label>
    <input type="checkbox" name="episol" id="episol">
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
        ['id'=> 1,'nome' => 'Actine Gel de Limpeza Facial ' , 'preco' => 79.99 , 'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/837234-800-auto?v=638490708508770000&width=800&height=auto&aspect=true'],
        ['id'=> 2,'nome' => 'Hidratante Neutrogena<br> hidrata e repara 400ml' , 'preco' => 32.99 ,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/716901-800-auto?v=638324514893370000&width=800&height=auto&aspect=true'],
        ['id'=> 3,'nome' => 'Epidrat Corpo Intensivo Creme 500g' , 'preco' => 62.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/741591-800-auto?v=638362728221800000&width=800&height=auto&aspect=true'],
        ['id'=> 4,'nome' => 'Gel Limpesa Suave Mantecorp Skincare...' , 'preco' => 69.90,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/824713-800-auto?v=638463905357170000&width=800&height=auto&aspect=true'],
        ['id'=> 6,'nome' => 'Cetaphil Creme Hidratante 250g' , 'preco' => 75.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/651041-800-auto?v=638012028660130000&width=800&height=auto&aspect=true'],
['id'=> 7,'nome' => 'Protetor Solar Sundown Fps30 120ml' , 'preco' => 36.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/801155-800-auto?v=638410252925830000&width=800&height=auto&aspect=true'],
['id'=> 8,'nome' => 'Cicaplast Baume B5 La Roche Posay Creme...' , 'preco' => 42.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/890639-800-auto?v=638533511178130000&width=800&height=auto&aspect=true'],
['id'=> 9,'nome' => 'Nivea Creme Hidratante Lata 145g' , 'preco' => 38.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/662880-800-auto?v=638059684192270000&width=800&height=auto&aspect=true'],
['id'=> 10,'nome' => 'Cicatricure Gel Para Cicatrizes e Estrias 30g' , 'preco' => 32.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/940427-800-auto?v=638642616872500000&width=800&height=auto&aspect=true'],
['id'=> 11,'nome' => 'Esfoliante facial Asepxia Carvão detox com 120g' , 'preco' => 25.49,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/682945-800-auto?v=638198064564200000&width=800&height=auto&aspect=true'],
['id'=> 12,'nome' => 'Kit Noestrata Minesol Compre 1 Protetor Faci...' , 'preco' => 99.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/752910-800-auto?v=638369988596770000&width=800&height=auto&aspect=true'],
['id'=> 13,'nome' => 'Normaderm Vichy Gel De Limpeza Profunda...' , 'preco' => 67.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/647378-800-auto?v=638008110096500000&width=800&height=auto&aspect=true'],
['id'=> 14,'nome' => 'Cerave Creme Hidrante 50g' , 'preco' => 37.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/916393-800-auto?v=638588995428330000&width=800&height=auto&aspect=true'],
['id'=> 15,'nome' => 'Neostrata Minesol Protetor Solar Facial Oil...' , 'preco' => 95.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/722716-800-auto?v=638334074001570000&width=800&height=auto&aspect=true'],
['id'=> 16,'nome' => 'Kit Nivea Beleza radiante Pele negra loção Corp...' , 'preco' => 39.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/713015-800-auto?v=638319374248700000&width=800&height=auto&aspect=true'],
['id'=> 17,'nome' => 'Kit Protetor Solar Facial Anthelios Airlicium Gel...' , 'preco' => 99.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/937629-800-auto?v=638638326994130000&width=800&height=auto&aspect=true'],
['id'=> 18,'nome' => 'Protetor Solar Sundown Praia E Piscina Fps50 200ml Grátis...' , 'preco' => 52.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/646381-800-auto?v=638008097581930000&width=800&height=auto&aspect=true'],
['id'=> 19,'nome' => 'Elseve Óleo Extraordinário Loréal Paris Tratamento Rec...' , 'preco' => 44.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/696086-800-auto?v=638259682200200000&width=800&height=auto&aspect=true'],
['id'=> 20,'nome' => 'Coloração Casting Creme Gloss 300 Castranho escuro' , 'preco' => 29.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/889717-800-auto?v=638532936982500000&width=800&height=auto&aspect=true'],
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