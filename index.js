function abrirMenu(){
    const tamanho = innerWidth;

    if(tamanho < 900){

        document.getElementById('open_menu_icon').style.display = 'none';
        document.getElementById('close_menu_icon').style.display = 'block';
        document.getElementById('cabecalho').style.height = '215px';
        document.getElementById('lista').style.display = 'block';
    }
}

function fecharMenu(){
    const tamanho = innerWidth;

    if(tamanho < 900){

        document.getElementById('open_menu_icon').style.display = 'block';
        document.getElementById('close_menu_icon').style.display = 'none';
        document.getElementById('cabecalho').style.height = '60px';
        document.getElementById('lista').style.display = 'none';
        document.getElementById('cabecalho').style.transition = '1s';
    }
}

function ocultarMenu(){
    const tamanho = innerWidth;

    if(tamanho < 900){

        document.getElementById('open_menu_icon').style.display = 'block';
        document.getElementById('close_menu_icon').style.display = 'none';
        document.getElementById('cabecalho').style.height = '60px';
        document.getElementById('lista').style.display = 'none';
        document.getElementById('cabecalho').style.transition = '1s';
    }
}