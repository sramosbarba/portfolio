const abrir = document.querySelector('#btn_open_menu');

function abrirMenu(){
    document.getElementById('cabecalho').style.display = 'none';
    document.getElementById('opcoes').style.display = 'flex';
    document.getElementById('conteudo').style.display = 'none';
}

abrir.addEventListener("click", abrirMenu);


const fechar = document.querySelector('#btn_close_menu');

function fecharMenu(){
    document.getElementById('cabecalho').style.display = 'flex';
    document.getElementById('opcoes').style.display = 'none';
    document.getElementById('conteudo').style.display = 'flex';
}

fechar.addEventListener("click", fecharMenu);