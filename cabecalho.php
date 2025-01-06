<!DOCTYPE html>
<html lang="pt-br">
<body onresize="ajusteTela()">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#001242">
    <title>Samuel RB | Portfólio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <header id="header">
            <nav id="navbar-closed">
                <div id="logo">
                    <a href="index.php">Samuel RB | <b id="logo-p2">Dev</b></a>
                </div>
                <div id="menu">
                    <ul id="lista">
                        <li class="link">
                            <a href="index.php">
                                Início
                            </a>
                        </li>
                        <li class="link">
                            <a href="sobre.php">
                                Sobre
                            </a>
                        </li>
                        <li class="link">
                            <a href="projetos.php">
                                Projetos
                            </a>
                        </li>
                        <li class="link">
                            <a href="contato.php">
                                Contato
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--Botões de exibição menu-->
            <span id="toggler-icon-open" onclick="abrirNavbar()" class="material-symbols-outlined">
                menu
            </span>

            <span id="toggler-icon-close" onclick="fecharNavbar()" class="material-symbols-outlined">
                close
            </span>
            
    </header>
    <script>

        function ajusteTela(){

        let larguraTela = window.innerWidth;

        if(larguraTela >= 768){
            document.getElementById('menu').style.display = "block";
        } else {
            document.getElementById('menu').style.display = "none";
            document.getElementById('toggler-icon-open').style.display = "block";
            document.getElementById('toggler-icon-close').style.display = "none";
        }

        }

        function abrirNavbar(){
            document.getElementById('menu').style.display = "block";
            document.getElementById('toggler-icon-open').style.display = "none";
            document.getElementById('toggler-icon-close').style.display = "block";
        }

        function fecharNavbar(){
            document.getElementById('menu').style.display = "none";
            document.getElementById('toggler-icon-close').style.display = "none";
            document.getElementById('toggler-icon-open').style.display = "block"
        
        }



    </script>
</body>
</html>