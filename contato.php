<?php
    include('cabecalho.php');
?>

<main>
    <h1 class="titulo">Contato</h1>
    <section class="contact_field">
        <div id="info">
            Informações
        </div>

        <span>
            Nome:
        </span>
        <input type="text">

        <span>
            E-mail:
        </span>
        <input type="email">

        <span>
            Assunto:
        </span>
        <input type="text">

        <button id="envio">Enviar</button>

    </section>
</main>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<style>
@import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
/*TITULOS*/

.contact_field{
    background-color: #F0F3FA;
    border: px solid gray;
    margin-left: 20vw;
    max-width: 60vw;
    margin-top: 50px;
    height: 50vh;
    border-radius: 15px;
}
#info{
    font-size: 20px;
    padding-top: 20px;
    text-align: center;
    margin-bottom: 25px;
}
.titulo{
    text-align: center;
    font-family: "Ubuntu", sans-serif;
    font-weight: 300;
    font-style: italic;
    font-size: 40px;
    margin-left: 20vw;
    max-width: 60vw;
    margin-top: 50px;
}

input{
    margin-left: 10%;
    width: 80%;
    height: 32px;
    border-radius: 5px;
    border: none;   
}

#envio{
    margin-left: 10%;
    margin-top: 15px;
    height: 40px;
    width: 80%;
}

span{
    margin-top: 15px;
    padding-bottom: 5px;
    padding-left: 10%;
    display: block;
}
</style>