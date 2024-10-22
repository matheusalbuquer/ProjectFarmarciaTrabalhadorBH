<?php 
//FUNÇÃO PARA REMOVER PRODUTO POR UNIDADE DO CARRNHO
if (isset($_GET['remover'])) {
    // Removendo do carrinho
    $idProduto = (int)$_GET['remover'];
    if (isset($itens[$idProduto]) && isset($_SESSION['carrinho'][$idProduto])) {
        $_SESSION['carrinho'][$idProduto]['quantidade']--;
        if ($_SESSION['carrinho'][$idProduto]['quantidade'] <= 0) {
            unset($_SESSION['carrinho'][$idProduto]); // Remove o item do carrinho se a quantidade for 0
        }
    } else {
        echo '<script>alert("ATENÇÃO: ESSE ITEM JÁ FOI REMOVIDO DO CARRINHO!");</script>';
    }
}
?>