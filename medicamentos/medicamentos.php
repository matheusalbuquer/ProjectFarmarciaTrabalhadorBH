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
                        <span class="cor-infantil">
                        <a href="../higiene/higiene.php">
                            Medicamentos e Saúde
                        </a>
                        </span>
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
         <a href="../enviarWhats.php" class="finalizandocompra">FINALIZAR COMPRA</a>
             </div>

        </div>

    </section>

    <div class="img-infantil">

<img src="./img-medicamentos/Seu bem-estar, (3).png" alt="">

</div>

<section id="produtos-infantis">



<div class="filtros-infantis">
    <div class="texto-filtro-infantil">
        <h3>
            MEDICAMENTOS E SAÚDE
        </h3>
    </div>
    
    <div class="marcas-filtro">
    <div class="filtrar-marcas">
        
            <label for="dorflex">Dorflex</label>
            <input type="checkbox" name="dorflex" id="dorflex">
            </div>

            <div class="filtrar-marcas">
            <label for="ems">EMS</label>
            <input type="checkbox" name="ems" id="ems">
            </div>

            <div class="filtrar-marcas">
            <label for="neosaldina">Neosaldina</label>
            <input type="checkbox" name="neosaldina" id="neosaldina">
            </div>

            <div class="filtrar-marcas">
            <label for="aché">Aché</label>
            <input type="checkbox" name="aché" id="aché">
            </div>

            <div class="filtrar-marcas">
            <label for="tylenol">Tylenol</label>
            <input type="checkbox" name="tylenol" id="tylenol">
            </div>

            <div class="filtrar-marcas">
            <label for="medley">Medley</label>
            <input type="checkbox" name="medley" id="medley">
            </div>

            <div class="filtrar-marcas">
            <label for="omeprazol">Omeprazol</label>
            <input type="checkbox" name="omprazol" id="omeprazol">
            </div>


            <div class="filtrar-marcas">
            <label for="sanofi">Sanofi</label>
            <input type="checkbox" name="sanofi" id="sanofi">
            </div>

            <div class="filtrar-marcas">
            <label for="novalgina">Novalgina</label>
            <input type="checkbox" name="novalgina" id="novalgina">
            </div>

            <div class="filtrar-marcas">
            <label for="bayer">Bayer</label>
            <input type="checkbox" name="bayer" id="bayer">
            </div>

            <div class="filtrar-marcas">
            <label for="neoquimica">Neoquimica</label>
            <input type="checkbox" name="neoquimica" id="neoquimica">
            </div>

            <div class="filtrar-marcas">
            <label for="cimegripe">Cimegripe</label>
            <input type="checkbox" name="cimegripe" id="cimegripe">
            </div>

            <div class="filtrar-marcas">
            <label for="vick">Vick</label>
            <input type="checkbox" name="vick" id="vick">
            </div>

            <div class="filtrar-marcas">
            <label for="diclofenaco">Diclofenaco</label>
            <input type="checkbox" name="difcloefanco" id="diclofenaco">
            </div>

            <div class="filtrar-marcas">
            <label for="paracetamol">Paracetamol</label>
            <input type="checkbox" name="paracetamol" id="paracetamol">
            </div>

            <div class="filtrar-marcas">
            <label for="benegrip">Benegrip</label>
            <input type="checkbox" name="benegrip" id="benegrip">
            </div>

            <div class="filtrar-marcas">
            <label for="rivotril">Rivotril</label>
            <input type="checkbox" name="rivotril" id="rivotril">
            </div>

            <div class="filtrar-marcas">
            <label for="tadalafila">Tadalafila</label>
            <input type="checkbox" name="tadalafila" id="tadalafila">
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
        ['id'=> 1,'nome' => 'Dorflex Uno Dipirona
                      1g 10 Comprimidos' , 'preco' => 12.29, 'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/863293-800-auto?v=638518896561170000&width=800&height=auto&aspect=true'],
            ['id'=> 2,'nome' => 'Diclofenaco Dietilamônio
                      Gel 60g...' , 'preco' => 10.59 ,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/637038-800-auto?v=637988112859930000&width=800&height=auto&aspect=true'],
            ['id'=> 3,'nome' => 'Neosaldina Dip 1g<br>
                    20 Comprimidos' , 'preco' => 23.44,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/841669-800-auto?v=638500429173270000&width=800&height=auto&aspect=true'],
            ['id'=> 4,'nome' => 'Sany D Calcio Com<br>
                    30 Comprimidos' , 'preco' => 49.52,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/832567-800-auto?v=638480953308900000&width=800&height=auto&aspect=true'],
            ['id'=> 5,'nome' => 'Tylenol Sinus 500mg +<br>
                    30mg 24 Comprimidos' , 'preco' => 19.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/912924-800-auto?v=638583912567800000&width=800&height=auto&aspect=true'],
            ['id'=> 6,'nome' => 'Dipirona 500mg 10<br>
                    Comprimidos Medley...' , 'preco' => 9.23,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/941280-800-auto?v=638645316653300000&width=800&height=auto&aspect=true'],
            ['id'=> 7,'nome' => 'Antigripal Cimegripe 20<br>
                    Cápsulas' , 'preco' => 12.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/793225-800-auto?v=638403343830930000&width=800&height=auto&aspect=true'],
            ['id'=> 8,'nome' => 'Novalgina 500mg Envelope
                    com 10 Comp...' , 'preco' => 14.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/895770-800-auto?v=638539865868600000&width=800&height=auto&aspect=true'],
            ['id'=> 9,'nome' => 'Advil Alívio Rápido<br>
                    da Dor de Cabeça e En...' , 'preco' => 18.69,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/837617-800-auto?v=638491228236930000&width=800&height=auto&aspect=true'],
            ['id'=> 10,'nome' => 'Paracetamol 750mg com 10
                    Comprimidos...' , 'preco' => 5.13,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/852452-800-auto?v=638512249151730000&width=800&height=auto&aspect=true'],
            ['id'=> 11,'nome' => 'Descongestionante Vick<br>
                    Vaporub 30g' , 'preco' => 34.49,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/284054-800-auto?v=637395721156230000&width=800&height=auto&aspect=true'],
            ['id'=> 12,'nome' => 'Benegripe Antigripal<br>
                    20 Comprimidos' , 'preco' => 38.59,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/693368-800-auto?v=638242471171530000&width=800&height=auto&aspect=true'],
            ['id'=> 13,'nome' => 'Analgésico Flanax 550mg
                     Bayer Dores Int...' , 'preco' => 35.92,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/666700-800-auto?v=638096468356430000&width=800&height=auto&aspect=true'],
            ['id'=> 14,'nome' => 'Probiótico Enterogermina 10
                    Fras...' , 'preco' => 38.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/895718-800-auto?v=638539846115030000&width=800&height=auto&aspect=true'],
            ['id'=> 15,'nome' => 'Rinosoro Alto Volume<br>
                    Frasco + 30 Sachets' , 'preco' => 59.94,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/702394-800-auto?v=638285009654870000&width=800&height=auto&aspect=true'],
            ['id'=> 16,'nome' => 'Vitaminas Neo Química<br>
                    A-Z 60 Comprimidos' , 'preco' => 17.49,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/680740-800-auto?v=638179507474870000&width=800&height=auto&aspect=true'],
            ['id'=> 17,'nome' => 'Centrum Multivitamínico<br>
                    Imunidade & Proteção...' , 'preco' => 69.95,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/927793-800-auto?v=638612256621130000&width=800&height=auto&aspect=true'],
            ['id'=> 18,'nome' => 'Bolsa Térmica Gel<br>
                    Mercur - Tamanho P' , 'preco' => 11.34,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/807776-800-auto?v=638422468095530000&width=800&height=auto&aspect=true'],
            ['id'=> 19,'nome' => 'Doralgina com 20<br>
                    drágeas neo química' , 'preco' => 11.92,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/846816-800-auto?v=638508733805900000&width=800&height=auto&aspect=true'],
            ['id'=> 20,'nome' => 'Aspirina 500mg com<br>
                    20 Comprimidos' , 'preco' => 15.99,'img'=> 'https://paguemenos.vtexassets.com/arquivos/ids/274391-800-auto?v=637305908738430000&width=800&height=auto&aspect=true'],
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
        include_once "..funcoesphp/esvaziar.php";
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