<?php




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", system-ui;
}


header{
    background-color: #ec3237;
   &  img{
        width: 200px;
        height: 150px;
    }
}


    h2{
        margin-bottom: 25px;
 
      
    }

        /* Estilo do Modal */
.modal {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
}

.modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    width: 400px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    text-align: center;
}

/* Fechar Modal */
.fechar-modal {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
    color: #8a8a8a;
}

/* Estilo dos Inputs */
.modal-content form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    text-align: left;
}

.modal-content label {
    
    font-weight: 500;
    margin-bottom: 5px;
    
}

.modal-content input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    outline: 0;
}

/* Estilo do Botão de Envio */
.modal-content button {
    background-color: #28a745;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.modal-content button:hover {
    background-color: #218838;
}

textarea{
    outline: 0;
    padding: 5px 0 0 5px;
}


#envio{
   
    color: #fff;
    background-color: #119b1d;
    margin: 20px 0
    
}

#envio{
    cursor:pointer;
    font-size:17px
    
}

#envio{
    transition:  0.3s ease-in-out;
}

#envio:hover{
    background-color: #07bd16;
}

#voltar{
    color: #ec3237;
    background-color: transparent;
    padding: 2px
    
}

#voltar{
    text-decoration:none;
    transition:  0.3s ease-in-out;
}

#voltar:hover{
    text-decoration: underline;
}

    </style>
</head>
<body>

<header>
    <img src="./imgs/logo.png" alt="" >
</header>

        <!-- Modal para preencher informações de entrega -->
<div id="modalEntrega" class="modal">
    <div class="modal-content">
        
        <h2>Informações de Entrega</h2>
        <form id="formEntrega" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>
            
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required>
            
            <label for="telefone">CPF:</label>
            <input type="cpf" id="cpf" name="cpf" required>
            
            <label for="comentario">Comentario:</label>
            <textarea name="observacao" id="observacao" name="comentario" rows="4" cols="50" placeholder="Adicionar observação"></textarea>            
            <input type="submit" id="envio" value="Enviar">    
        </form>

        <a id="voltar" href="index.php">
            Voltar
        </a>
    </div>
</div>
<script src="./script.js"></script>
</body>
</html>

<?php 
session_start();

// Inicializa a variável que conterá os produtos do carrinho em formato de string
$meuArray = "";
$sub = 0;
// Verifica se o carrinho existe e não está vazio
if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
    foreach ($_SESSION['carrinho'] as $key => $value) {
        // Concatena os produtos do carrinho em uma string
        $meuArray .= $value['nome'] . ' - Quantidade: ' . $value['quantidade'] . ' - R$: ' . ($value['quantidade'] * $value['preco']) . "\n";
        $sub += $value['preco'] * $value['quantidade'];
    }
} else {
    $meuArray = "Carrinho vazio.";
}

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $observacao = $_POST['observacao'];
    
    // Constrói a mensagem para o WhatsApp
    $mensagem = urlencode("Olá, meu nome é $nome. Gostaria de confirmar meu pedido:\n\nEndereço de entrega: $endereco\nTelefone: $telefone\n CPF: $cpf\n\nProdutos:\n$meuArray \n Subtotal: R$  $sub \nObservação: $observacao");

    // Redireciona para o WhatsApp
    header("Location: https://api.whatsapp.com/send?phone=5581984220414&text=$mensagem");
    exit();
}
?>