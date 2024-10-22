<?php 
session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Farmácia do Trabalhador BH</title>
</head>
<body>
    <header>

        <div class="header-conteiner">

            <img src="./imgs/logo.png" alt="" class="logotipo">


            <div class="procurar">
                <input type="search" id="pesquisar" placeholder="O que você procura?">   
                <i class="fa-solid fa-magnifying-glass" style="color: #464646cc;"></i>          
            </div>

          <div class="header-outros">

   

            <div id="cesta" class="outros">
                <button class="cestinha" onclick="abrirCestinha()">
                    <img src="./imgs/icone-cestinha.png" alt="imagem de uma cesta">
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
                        <a href="./infantil/infantil.php">
                            Infantil
                        </a>
                    </li>

                    <li>
                        <a href="./dermocosmeticos/dermo.php">
                            Dermocosméticos
                        </a>
                    </li>

                    <li>
                        <a href="./medicamentos/medicamentos.php">
                            Medicamentos e Saúde
                        </a>
                    </li>

                    <li>
                        <a href="higiene/higiene.php">
                            Higiene e Beleza
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </section>


    <section id="galeria-principal" class="galeria-principal">
    <div class="conteudo-galeria">
        <img src="https://img.farmaciasapp.com.br/marketplace/fapp-mktp/banners/e59aabac-7e33-46b5-9be2-d66ad3fa438b-png?ims=1320x360" alt="Imagem 1" class="imagem">
        <img src="https://img.farmaciasapp.com.br/marketplace/fapp-mktp/banners/beba1fb7-de38-4dcd-9c01-e8eb6df050df-png?ims=1320x360" alt="Imagem 2" class="imagem">
    </div>
    
    <!-- Controles -->
    <button class="anterior" onclick="galeriaMudarImagem(-1)">&#10094;</button>
    <button class="proxima" onclick="galeriaMudarImagem(1)">&#10095;</button>
</section>


    <section id="principal">
        <div class="conteiner-principal">

            <div class="primeiras-ofertas">
                <a href="">
                    <img src="./imgs/higiene-infantil.png" alt="">
                </a>
            </div>

            <div class="primeiras-ofertas">
                <a href="">
                    <img src="./imgs/protetores.png" alt="">
                </a>
            </div>

            <div class="primeiras-ofertas">
                <a href="">
                    <img src="./imgs/dermocosmeticos.png" alt="">
                </a>
            </div>

            <div class="primeiras-ofertas">
                <a href="">
                    <img src="./imgs/cuidado-corporal.png" alt="">
                </a>
            </div>
            
        </div>
    </section>

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
                </p>
            </div>

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
  }
  ?>

  
 
</div>
</div>
    <div class="subtotal">
        <div class="sb-conteiner">
            <p>Subtotal:</p>
        <a > R$ <?php echo number_format($sub,2,',','.');?> </a>
        </div>
    </div>

  <div class="finalizandocompra-conteiner">
  <a href="./enviarWhats.php" class="finalizandocompra">FINALIZAR COMPRA</a>
  </div>


</div>
    </section>

    <div class="texto-maisvendidos">

    <h3>
        Mais vendidos        
     </h3>

    </div>
    <section id="maisvendido">
    <div class="carousel-container">
        <div class="slides">
            <?php 
            include_once 'array.php'; 
            ?>
        </div>

        <!-- Controles do carrossel -->
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>

        
    </div>
</section>

<section class="topicoscapilar">
        <p>Cuidados capilares</p>
        <div class="tc-conteiner">

            <a href="">
                <img src=" https://res.cloudinary.com/beleza-na-web/image/upload/f_auto,fl_progressive,q_auto:eco,w_190/v1/brand/2022_09_27_17_29_33_1/0c46e433-8705-4521-8350-e8f01804f8b4-marca-skala-carrossel.svg" alt="">
            </a>

            <a href="" class="dabelle">
                <img src="https://res.cloudinary.com/beleza-na-web/image/upload/f_auto,fl_progressive,q_auto:eco,w_190/v1/brand/2019_09_24/b3375c3c-f71a-47fc-a500-6b8c174b1e32-marca-dabelle-hair-carrossel.svg" alt="">
            </a>

            <a href="">
                <img src="https://res.cloudinary.com/beleza-na-web/image/upload/f_auto,fl_progressive,q_auto:eco,w_190/v1/brand/2022_09_28_15_40_42_1/b78c0120-1d77-4096-a64a-75ce7d7d43e3-marca-seda-carrossel.svg" alt="">
            </a>


        </div>

    </section>

    <section id="produtos-capilares">
    <div class="p-capilares">
    

        <div class="sobreproduto">
        <img src="https://www.skala.com.br/imagens/catalogosProdutos/produtos/o115.png" alt="">

        <p>
        Creme de Tratamento Ceramidas <br>
        </p>

        </div>

        <strong class="preco">
        R$ 13,49
        </strong>

        <button href="" class="veroproduto">ADICIONAR PRODUTO</button>
        </div>


        <div class="p-capilares">
       

        <div class="sobreproduto">
        <img src="https://m.media-amazon.com/images/I/714imJHagSL.__AC_SX300_SY300_QL70_ML2_.jpg" alt="">

        <p>
        Creme de Tratamento Lama Negra...
        </p>

        </div>

        <strong class="preco">
        R$ 16,49
        </strong>

        <button href="" class="veroproduto">ADICIONAR PRODUTO</button>
        </div>

        <div class="p-capilares">
       

        <div class="sobreproduto">
        <img src="https://m.media-amazon.com/images/I/71tyYGWo+BL._AC_SY879_.jpg" alt="">

        <p>
        Dabelle Mascara de Hidratação Res...<br>

        </p>

        </div>

        <strong class="preco">
        R$ 28,99
        </strong>

        <button href="" class="veroproduto">ADICIONAR PRODUTO</button>
        </div>

        <div class="p-capilares">
        

        <div class="sobreproduto">
        <img src="https://m.media-amazon.com/images/I/51C0w4uhu6L._AC_SX679_.jpg" alt="">

        <p>
        Seda Kit Shampoo E Condicionador...

        </p>

        </div>

        <strong class="preco">
        R$ 13,49
        </strong>

        <button href="" class="veroproduto">ADICIONAR PRODUTO</button>
        </div>

       
    </section>

    <h3 class="texto-saude">
        Seção saúde 
    </h3> 

    <section id="secao-saude">


            <div class="p-saude">


            <div class="sobreproduto">
                
            
        <img src="https://www.farmaciasindependente.com.br/media/produtos/7896714219301_400x400.webp" alt="">

        <p>
        Histamin 2mg 20 Comprimidos
        </p>

        </div>
        <strong class="preco">
        R$ 8,90
        </strong>

        <a href="" class="verproduto">ADICIONAR PRODUTO</a>
        </div>



        <div class="p-saude">

        <div class="sobreproduto">
        <img src="https://www.farmaciasindependente.com.br/media/produtos/7896422505673_400x400.webp" alt="">

        <p>
        Simeticona 75mg Gotas 15ml Medley
        </p>

        </div>

        <strong class="preco">
        R$ 17,49
        </strong>

        <a href="" class="verproduto">ADICIONAR PRODUTO</a>
        </div>

            <div class="p-saude">
            <div class="sobreproduto">

            <img src="https://www.farmaciasindependente.com.br/media/produtos/1_400x400.webp" alt="">

            <p>
            Expec Xarope 120ML  <br>
            
           </p>

           </div>

            <strong class="preco">
            R$ 27,49
            </strong>

            <a href="" class="verproduto">ADICIONAR PRODUTO</a>
            </div>
            <div class="p-saude">
            <div class="sobreproduto">

            <img src="https://www.farmaciasindependente.com.br/media/produtos/remedio_400x400.webp" alt="">

            <p>
            Ibuprofeno 100mg Gotas 20ml Medley
            </p>
            </div>
            <strong class="preco">
            R$ 9,49
            </strong>

            <a href="" class="verproduto">ADICIONAR PRODUTO</a>
            </div>


    </section>

    <section id="local-loja">
        <div class="local-conteiner">
            <div class="texto-link-local">
                <h4>
                    NOSSA LOCALIZAÇÃO
                </h4>

                <a class="link-local" href="https://www.google.com/maps/place/R.+Bomba+do+Hemetério,+155+-+Bomba+do+Hemetério,+Recife+-+PE,+52111-070/@-8.0234711,-34.8985253,15z/data=!4m6!3m5!1s0x7ab184ed9c0e773:0x6bb255f982a4bb5!8m2!3d-8.0234891!4d-34.8985253!16s%2Fg%2F11c4tqwtvp?hl=pt-br&entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D" target="_blank" >
                    Acesse
                </a>
            </div>

            <div>
                <img src="./imgs/localizacao-img.png" alt="">
            </div>
        </div>
    </section>

    <div class="melhorprecoaqui">

    <img src="./imgs/farmaceutica.png" alt="">

     <p>
        O MELHOR PREÇO VOCÊ ENCONTRA AQUI!
     </p>   

    </div>


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
                
                        <a href="https://api.whatsapp.com/send?phone=5581984220414&text=SEJA BEM VINDO A NOSSO, WHATSSAP">
                            WhatsApp</a>
                        </li>
                </ul>
            </div>
        </div>

       <p>&copy; 2024 Fármacia do Trabalhador BH. Todos os direitos reservados</p>
    </footer>
    </section>


    <script src="./script.js"></script>
    <?php 
        include_once "funcoesphp/adicionar.php";
        include_once "funcoesphp/remover.php";
        include_once "funcoesphp/esvaziar.php";
    ?>

</body>


</html>