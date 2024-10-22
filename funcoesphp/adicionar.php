<?php 
//FUNCAO PARA ADICIONAR PRODUTO AO CARRINHO
if(isset($_GET['adicionar'])){
    //Vamos adicionar ao carrinho
    $idProduto =  (int) $_GET['adicionar'];
    if(isset($itens[$idProduto])){
        if(isset($_SESSION['carrinho'][$idProduto])){
            $_SESSION['carrinho'][$idProduto]['quantidade']++;
        } else{
            $_SESSION['carrinho'][$idProduto] = array('quantidade' => 1, 'nome' => $itens[$idProduto]['nome'], 'preco' => $itens[$idProduto]['preco']);
        }
        
    }else{
        die ("você nao pode adicionar um item que nao existe");
    }
} 

?>