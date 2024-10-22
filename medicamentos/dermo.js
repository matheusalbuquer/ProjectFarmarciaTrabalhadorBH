const carrinho = document.querySelector('.cestinha-conteiner')

function abrirCestinha() {
    carrinho.style.display = 'flex'; 
    carrinho.classList.remove('inactive'); 
    carrinho.classList.add('active'); 
}

// Função para fechar a cesta
function fechandoCesta() {
    carrinho.classList.remove('active'); 
    carrinho.classList.add('inactive'); 
    
    
    setTimeout(() => {
        carrinho.style.display = 'none';
    }, 300);
}


document.getElementById('fecharCestinha').addEventListener('click', fechandoCesta);


document.querySelector('.cestinha').addEventListener('click', abrirCestinha);