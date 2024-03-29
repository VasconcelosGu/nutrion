<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="description" content="Websted, o seu site do seu jeitinho!" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap"
        rel="stylesheet" />


    <link rel="shortcut icon" href="/img/icon.png" type="icon.png" />

    @vite(['resources/js/font-awesome.js', 'resources/css/selecao/style.css'])

    <title>NutriON | Selecionar Cálculo</title>
</head>

<body>
    <header class="header">
        <div class="header-container">
            <a href="{{ route('home') }}"><img src="./img/logo_verde.png" alt="logo-nutrion" /></a>
            <button class="toggle-menu"><i class="far fa-bars"></i></button>
            <nav class="header-nav">
                <ul class="header-menu">
                    <li><a href="{{ route('home') }}" class="texto w">Home</a></li>
                    <li><a href="{{ route('home') }}#sobre" class="texto w">Sobre</a></li>
                    <li><a href="{{ route('home') }}#calculos" class="texto w">Cálculos </a></li>
                    <li>
                        <a href="{{ route('contato') }}" class="texto w">Contato</a>
                    </li>
                </ul>
                <a href="{{ route('selecao-calculo') }}" class="botao botao-branco">calcular</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit" class="botao botao-sair">Sair</button>
                </form>
            </nav>
        </div>
    </header>

    <section class="selecao">
        <div class="selecao-container">
            <h1 class="titulo">selecione o tipo de cálculo</h1>
            <div class="calculos-cards">
                <ul>
                    <li>
                        <div class="calculo-card">
                            <h1 class="h3 g300">Cálculo de nutrientes</h1>
                            <p class="texto g700">
                                Aqui você pode consultar o valor dos principais nutrientes que a refeição que
                                você montar possui
                            </p>

                            <a class="botao botao-verde" href="{{ route('calculo-nutrientes') }}">acessar</a>
                        </div>
                    </li>

                    <li>
                        <div class="calculo-card">
                            <h1 class="h3 g300">Cálculo de IMC</h1>
                            <p class="texto g700">
                                Aqui você pode calcular o IMC de alguém baseado no peso e
                                altura de uma pessoa
                            </p>

                            <a class="botao botao-verde" href="{{ route('calculo-imc') }}">acessar</a>
                        </div>
                    </li>

                    <li>
                        <div class="calculo-card">
                            <h1 class="h3 g300">Cálculo de litros<br />de água</h1>
                            <p class="texto g700">
                                Aqui você pode calcular quantos litros de água recomenda-se
                                beber diariamente baseada no peso
                            </p>

                            <a class="botao botao-verde" href="{{ route('calculo-agua') }}">acessar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-container">
            <p class="copyright w">© Todos os direitos reservados</p>
            <ul class="redes-footer">
                <li>
                    <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5517996415137" aria-label="Link para Whatsapp">
                        <div class="bg-icon">
                            <i class="fab fa-whatsapp w"></i>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="tel:(17) 99641-5137" aria-label="Link para Telefone">
                        <div class="bg-icon">
                            <i class="fas fa-phone w"></i>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="mailto:contato.nutrion@hotmail.com" aria-label="Link para Email">
                        <div class="bg-icon">
                            <i class="fas fa-envelope w"></i>
                        </div>
                    </a>
                </li>
            </ul>
            <a class="link-instagram" href="https://www.instagram.com/vasconcelos_gu/"
                aria-label="Link para Instagram do Criador" target="_blank">
                <p class="madeby w">Feito com ❤ por Gustavo Vasconcelos</p>
            </a>
        </div>
    </footer>

    @vite(['resources/js/menu.js'])

</body>

</html>
