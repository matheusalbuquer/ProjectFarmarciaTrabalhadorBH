<?php 
           
           $itens = array(
            ['id'=> 1,'nome' => 'Dipirona Monoidratada' , 'preco' => 5.21 , 'img'=> 'https://cdn.ultrafarma.com.br/static/produtos/813397/medium-637232592498370880-813397_2.jpg'],
            ['id'=> 2,'nome' => 'Cimegripe' , 'preco' => 6.25 ,'img'=> 'https://cdn.ultrafarma.com.br/static/produtos/49973/medium-638569158451131837-49973_3.jpg'],
            ['id'=> 3,'nome' => 'Soluçao Fisiologia 500ML' , 'preco' => 7.22,'img'=> 'https://cdn.ultrafarma.com.br/static/produtos/812508/large-637115162140589414-812508_2.png'],
            ['id'=> 4,'nome' => 'Buscopan Composto 20' , 'preco' => 20.56,'img'=> 'https://www.farmaciasindependente.com.br/media/produtos/7896026301428_400x400.webp'],           
            ['id'=> 5,'nome' => 'Desodorante Rexona Pow..' , 'preco' => 9.99,'img'=> 'https://www.drogasil.com.br/_next/image?url=https%3A%2F%2Fproduct-data.raiadrogasil.io%2Fimages%2F3504603.webp%3Fwidth%3D75%26height%3D75%26quality%3D85%26type%3Dresize&w=1200&q=85'],
            ['id'=> 6,'nome' => 'Protetor Solar Facial e Cor..' , 'preco' => 55.79,'img'=> 'https://www.drogasil.com.br/_next/image?url=https%3A%2F%2Fproduct-data.raiadrogasil.io%2Fimages%2F10654563.webp%3Fwidth%3D75%26height%3D75%26quality%3D85%26type%3Dresize&w=1200&q=85'],
    );

            foreach ($itens as $key => $value) {
            ?>
            <div class="produtos-mais-vendidos slide">

                <div class="sobreoproduto">

                
                <img src="<?php echo $value['img']?>" alt="">


                <p><?php echo $value['nome']?></p>
                </div>
                <strong><?php echo 'R$: '.$value['preco']?></strong>


                <a class="verproduto" onclick="produtonacesta()" href="?adicionar=<?php echo $key ?>">ADICIONAR PRODUTO</a>


            </div>
            <?php 
            }
            ?>