// Função para definir um cookie com SameSite=None
function definirCookie(nome, valor) {
    document.cookie = `${nome}=${valor}; SameSite=None; Secure;`;
}


function verificarTamanhoTela() {
    var divMobile = document.querySelector('.v-mobile');
    var divDesktop = document.querySelector('.v-desktop');
    
    if (window.innerWidth < 932) {
        // Mostra o conteúdo para dispositivos móveis
        divMobile.style.display = 'block';
        // Esconde o conteúdo para desktop
        divDesktop.style.display = 'none';
    } else {
        // Esconde o conteúdo para dispositivos móveis
        divMobile.style.display = 'none';
        // Mostra o conteúdo para desktop
        divDesktop.style.display = 'block';
    }
}

// Chama a função ao carregar a página
verificarTamanhoTela();

// Adiciona um listener para chamar a função sempre que o tamanho da janela for alterado
window.addEventListener('resize', verificarTamanhoTela);
