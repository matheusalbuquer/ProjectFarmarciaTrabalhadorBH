 <?php
 //FUNÇÃO PARA ESVAZIAR CARRINHO
    if(isset($_GET['finalizar'])){
        unset($_SESSION['carrinho']);
    }

?>

    