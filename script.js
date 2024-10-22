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

function produtonacesta() {
   
    document.querySelector('.verproduto').addEventListener('click', function() {
        document.querySelector('cestavazia').style.display = 'none';
        
    });
    
}




document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 0;
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;
    const visibleSlides = 4; // Ajuste de acordo com a quantidade de slides visíveis
    const slideWidth = 300; // Largura de cada slide

    function changeSlide(direction) {
        currentIndex += direction;

        // Limita o currentIndex ao intervalo permitido
        if (currentIndex < 0) {
            currentIndex = 0;
        } else if (currentIndex > totalSlides - visibleSlides) {
            currentIndex = totalSlides - visibleSlides;
        }

        // Deslocamento em pixels
        const offset = -currentIndex * slideWidth;
        slides.style.transform = `translateX(${offset}px)`;
    }

    // Torna a função changeSlide acessível globalmente
    window.changeSlide = changeSlide;
});



(function() {
    let indiceAtual = 0;
    const galeria = document.querySelector('#galeria-principal');
    const imagens = galeria.querySelectorAll('.imagem');
    const galeriaConteudo = galeria.querySelector('.conteudo-galeria');
    const totalImagens = imagens.length;

    function mostrarImagem(index) {
        // Verifica limites para garantir que não passe do início ou do fim
        if (index < 0) {
            indiceAtual = totalImagens - 1;
        } else if (index >= totalImagens) {
            indiceAtual = 0;
        } else {
            indiceAtual = index;
        }

        // Movimenta a galeria na direção correta
        galeriaConteudo.style.transform = `translateX(-${indiceAtual * 100}%)`;
    }

    // Troca automática de imagens a cada 4 segundos
    setInterval(() => {
        mostrarImagem(indiceAtual + 1);
    }, 4000);

    // Controles manuais
    window.galeriaMudarImagem = function(passo) {
        mostrarImagem(indiceAtual + passo);
    };

    // Exibe a primeira imagem inicialmente
    mostrarImagem(indiceAtual);
})();

/*

CODIGO DA BARRA DE PESQUISA 


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

*/