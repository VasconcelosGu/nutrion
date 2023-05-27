<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta name="description" content="Websted, o seu site do seu jeitinho!" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <script src="/js/font-awesome.js"></script>

    <link rel="shortcut icon" href="/img/icon.png" type="icon.png" />

    <link rel="stylesheet" href="/css/contato/style.css" />

    <title>NutriON | Selecionar Cálculo</title>
  </head>
  <body>
  <header class="header">
      <div class="header-container">
        <a href="/"><img src="public/img/logo_verde.png" alt="logo-nutrion" /></a>
        <button class="toggle-menu"><i class="far fa-bars"></i></button>
        <nav class="header-nav">
          <ul class="header-menu">
            <li><a href="index.php" class="texto w">Home</a></li>
            <li><a href="index.php#sobre" class="texto w">Sobre</a></li>
            <li><a href="index.php#calculos" class="texto w">Cálculos </a></li>
            <li>
              <a href="resources/views/contato.blade.php" class="texto w">Contato</a>
            </li>
          </ul>
          <a href="resources/views/selecao-calculo.blade.php" class="botao botao-branco"
            >calcular</a
          >
        </nav>
      </div>
    </header>
    <section class="contato">
      <div class="contato-container">
        <h1 class="titulo">contato</h1>
        <p class="texto-grande g700">
          Aqui você pode se sentir à vontade para entrar em contato para tirar
          dúvidas ou sugerir a adição de algum produto.
        </p>
        <ul class="contatos-lista">
          <li>
            <a
              href="http://api.whatsapp.com/send?1=pt_BR&phone=5517996415137"
              aria-label="Link para WhatsApp"
              ><div class="bg-circle"><i class="fab fa-whatsapp w"></i></div>
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
            <a
              href="mailto:contato.nutrion@hotmail.com"
              aria-label="Link para enviar e-mail"
              ><div class="bg-circle"><i class="fas fa-envelope w"></i></div>
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
            <a
              href="http://api.whatsapp.com/send?1=pt_BR&phone=5517996415137"
              aria-label="Link para Whatsapp"
              ><div class="bg-icon">
                <i class="fab fa-whatsapp w"></i></div
            ></a>
          </li>

          <li>
            <a href="tel:(17) 99641-5137" aria-label="Link para Telefone"
              ><div class="bg-icon">
                <i class="fas fa-phone w"></i></div
            ></a>
          </li>

          <li>
            <a
              href="mailto:contato.nutrion@hotmail.com"
              aria-label="Link para Email"
              ><div class="bg-icon">
                <i class="fas fa-envelope w"></i></div
            ></a>
          </li>
        </ul>
        <a
          class="link-instagram"
          href="https://www.instagram.com/vasconcelos_gu/"
          aria-label="Link para Instagram do Criador"
          target="_blank"
          ><p class="madeby w">Feito com ❤ por Gustavo Vasconcelos</p></a
        >
      </div>
    </footer>
    <script src="resources/js/menu.js"></script>
  </body>
</html>
