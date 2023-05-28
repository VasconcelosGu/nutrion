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

    <link rel="shortcut icon" href="public/img/icon.png" type="icon.png" />

    @vite(["resources/js/font-awesome.js",
    "resources/css/calc_imc/style.css"])

    <title>NutriON | Cálculo Litro de Água</title>
  </head>
  <body>
  <header class="header">
      <div class="header-container">
        <a href="{{route('home')}}"><img src="./img/logo_verde.png" alt="logo-nutrion" /></a>
        <button class="toggle-menu"><i class="far fa-bars"></i></button>
        <nav class="header-nav">
          <ul class="header-menu">
            <li><a href="{{route('home')}}" class="texto w">Home</a></li>
            <li><a href="{{route('home')}}#sobre" class="texto w">Sobre</a></li>
            <li><a href="{{route('home')}}#calculos" class="texto w">Cálculos </a></li>
            <li>
              <a href="{{route('contato')}}" class="texto w">Contato</a>
            </li>
          </ul>
          <a href="{{route('selecao-calculo')}}" class="botao botao-branco"
            >calcular</a
          >
        </nav>
      </div>
    </header>

    <section class="calculo-imc">
      <div class="calculo-imc-container">
        <h1 class="titulo">cálculo de IMC</h1>
        <p class="texto-grande g700">
          Digite o peso e a altura para descobrir qual é o IMC (utilize "." ao invés de ",")
        </p>
        <form class="calculo-imc" id="calculo-imc-form">
          <div class="formula-imc">
            <div class="input-peso">
              <h1 class="texto-grande g700">Peso(kg)</h1>
              <input name="peso" class="texto-grande g700" type="text" />
            </div>
            <p class="texto-grande g700">/</p>
            <div class="input-altura">
              <h1 class="texto-grande g700">Altura(m)</h1>
              <input name="altura" class="texto-grande g700" type="text" />
            </div>
            <p class="texto-grande g700">=</p>
            <div class="imc-resultado">
              <h1 class="texto-grande g700">IMC:</h1>
              <div class="calc-imc-res" id="calc-imc-res">
                <p class="texto-grande"></p>
              </div>
            </div>
          </div>
          <div class="form-buttons">
            <button class="botao-vermelho botao btnResetCalcImc" type="reset">
              limpar
            </button>

            <button class="botao-verde botao btnCalcIMC" type="submit">
              calcular
            </button>
          </div>
          <table class="tabela-imc">
            <thead>
              <th class="th2 last">resultado</th>
              <th class="last">situação</th>
            </thead>

            <tbody>
              <tr>
                <td>Abaixo de 17</td>
                <td>Muito abaixo do peso</td>
              </tr>
              <tr>
                <td>Entre 17 e 18,49</td>
                <td>Abaixo do peso</td>
              </tr>
              <tr>
                <td>Entre 18,5 e 24,99</td>
                <td>Peso normal</td>
              </tr>
              <tr>
                <td>Entre 25 e 29,99</td>
                <td>Acima do peso</td>
              </tr>
              <tr>
                <td>Entre 30 e 34,99</td>
                <td>Obesidade I</td>
              </tr>
              <tr>
                <td>Entre 35 e 39,99</td>
                <td>Obesidade II (severa)</td>
              </tr>
              <tr>
                <td class="last">Acima de 40</td>
                <td class="last">Obesidade III (mórbida)</td>
              </tr>
            </tbody>
          </table>
        </form>
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
    
    @vite(["resources/js/menu.js",
    "resources/js/calculo-imc.js"])
  </body>
</html>
