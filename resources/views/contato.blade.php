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

    @vite(['resources/js/font-awesome.js', 'resources/css/contato/style.css'])

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
                    <button type="submit" id="botao-logout">Sair</button>
                </form>
            </nav>
        </div>
    </header>

    <section class="contato">
        <div class="contato-container">
            <h1 class="titulo">contato</h1>
            <p class="texto-grande g700">
                Aqui você pode se sentir à vontade para entrar em contato para tirar
                dúvidas, sugerir a adição de algum produto, alteração de textos etc.
            </p>
            <ul class="contatos-lista">
                <li>
                    <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5517996415137" aria-label="Link para WhatsApp">
                        <div class="bg-circle"><i class="fab fa-whatsapp w"></i></div>
                        <h1 class="texto-grande g700">whatsapp:</h1>
                        <p class="texto g500">(17) 99641-5137</p>
                    </a>
                </li>
                <li>
                    <a href="tel:(17) 99641-5137" aria-label="Link para telefonar">
                        <div class="bg-circle"><i class="fas fa-phone w"></i></div>
                        <h1 class="texto-grande g700">telefone:</h1>
                        <p class="texto g500">(17) 99641-5137</p>
                    </a>
                </li>

                <li>
                    <a href="mailto:contato.nutrion@hotmail.com" aria-label="Link para enviar e-mail">
                        <div class="bg-circle"><i class="fas fa-envelope w"></i></div>
                        <h1 class="texto-grande g700">email:</h1>
                        <p class="texto g500">contato.nutrion@hotmail.com</p>
                    </a>
                </li>
            </ul>
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
