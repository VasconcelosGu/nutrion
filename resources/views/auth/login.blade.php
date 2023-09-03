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

    @vite(['resources/js/font-awesome.js', 'resources/css/login/style.css'])

    <title>NutriON | Login</title>
</head>

<body>
    <div class="login-container">
        <div class="login-left">
            <img src="./img/logo_verde.png" class="logo-login" alt="logo nutrion" />
        </div>

        <dialog class="dialogLogin">
            <div class="dialog-header">
                <p class="texto-grande">
                    Para realizar o seu cadastro, entre em contato por meio
                    de algum de nossos canais.
                </p>
                <button class="buttonCloseLogin buttonClose w">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <p class="alerta r300">
                *Esse processo é rápido e é feito porque precisamos da
                confirmação de alguns documentos
            </p>
            <ul class="contato-lista">
                <li>
                    <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5517996415137" aria-label="Link para WhatsApp">
                        <div class="bg-icon">
                            <i class="fab fa-whatsapp gray"></i>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="tel:(17) 99641-5137" aria-label="Link para telefonar">
                        <div class="bg-icon">
                            <i class="fas fa-phone gray"></i>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="mailto:contato.nutrion@hotmail.com" aria-label="Link para enviar e-mail">
                        <div class="bg-icon">
                            <i class="fas fa-envelope gray"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </dialog>

        <div class="login-right">
            <img src="./img/logo_verde.png" class="loginImgMobile" alt="logo nutrion" />
            <div class="login-form card-login">
                <p class="texto-grande gray">Digite seus dados de acesso</p>
                @foreach ($errors->all() as $message)
                    <p class="r300">{{ $message }}</p>
                @endforeach
                <form action="{{ route('login') }}" method="POST" class="login-form">
                    @csrf
                    <input type="text" name="email" placeholder="E-mail" />
                    <input type="password" name="password" placeholder="Senha" />
                    <div class="registro">
                        <p>não tem uma conta?</p>
                        <a class="g300 btnOpenLogin">Registre-se</a>
                    </div>
                    <button class="botao-verde botao" type="submit">
                        <i class="fas fa-sign-in-alt"></i>
                        Entrar
                    </button>
                </form>


            </div>
            <div class="contato">
                <h1 class="gray">Contato</h1>
                <ul class="contato-lista">
                    <li>
                        <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5517996415137"
                            aria-label="Link para WhatsApp">
                            <div class="bg-icon">
                                <i class="fab fa-whatsapp gray"></i>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="tel:(17) 99641-5137" aria-label="Link para telefonar">
                            <div class="bg-icon">
                                <i class="fas fa-phone gray"></i>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="mailto:contato.nutrion@hotmail.com" aria-label="Link para enviar e-mail">
                            <div class="bg-icon">
                                <i class="fas fa-envelope gray"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @vite(['resources/js/modalLogin.js'])
</body>

</html>
