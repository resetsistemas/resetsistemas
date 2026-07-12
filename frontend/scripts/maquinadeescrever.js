const palavras = ['set', 'imagine', 'alinhe', 'invista', 'faça', 'inicie', 'set', 'invente','conecte','nove', 'comece', 'pense'];
let indicePalavraAtual = 0;

// Função para escrever cada letra
function typeWriter(elemento, texto, callback) {
    elemento.innerHTML = '';
    texto.split('').forEach((letra, i) => {
        setTimeout(() => {
            elemento.innerHTML += letra;
            if (i === texto.length - 1 && typeof callback === 'function') {
                setTimeout(callback, 2000);  // Tempo de espera antes de começar a apagar
            }
        }, 100 * (i + 1)); // Tempo de escrever cada letra
    });
}

// Função para deletar cada letra
function deleteWriter(elemento, texto, callback) {
    const textoArray = texto.split('');
    textoArray.forEach((letra, i) => {
        setTimeout(() => {
            elemento.innerHTML = textoArray.slice(0, textoArray.length - i - 1).join('');
            if (i === textoArray.length - 1 && typeof callback === 'function') {
                setTimeout(callback, 1000);  // Tempo de espera antes de começar a escrever novamente
            }
        }, 100 * (i + 1));  // Use um tempo menor para apagar mais rapidamente
    });
}

// Função para ciclo de escrita e deleção
function typeDeleteCycle(elemento) {
    const palavraAtual = palavras[indicePalavraAtual];
    elemento.dataset.texto = palavraAtual;

    typeWriter(elemento, palavraAtual, () => {
        deleteWriter(elemento, palavraAtual, () => {
            indicePalavraAtual = (indicePalavraAtual + 1) % palavras.length; // Atualiza o índice da próxima palavra
            typeDeleteCycle(elemento);
        });
    });
}

document.addEventListener("DOMContentLoaded", function() {
    const titulo = document.querySelector('.maquinadeescrever > .palavras > p');
    typeDeleteCycle(titulo);
});