<html lang="pt-br">

<head>
  <meta name="description" content="Websted, o seu site do seu jeitinho!" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet" />

  <link rel="shortcut icon" href="./img/icon.png" type="icon.png" />

  @vite(["resources/js/font-awesome.js","resources/css/calc_calorias/style.css"])

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
        <a href="{{route('selecao-calculo')}}" class="botao botao-branco">calcular</a>
      </nav>
    </div>
  </header>


  <section class="calculo-nutrientes">
    <div class="calculo-nutrientes-container">
      <h1 class="titulo">cálculo de calorias</h1>
      <p class="texto-grande g700">
        Escolha o alimento que deseja e digite a quantidade para saber os valores nutricionais do mesmo
      </p>
      <form class="calculo" id="calculo-nutrientes-form">
        <div class="formula-nutrientes">
          <div class="input-produto">
            <h1 class="texto-grande g700">Alimento:</h1>
            <input list="produtos" class="texto-grande g700" id="produtos-input" name="produtos-input">
            <datalist id="produtos">
              @foreach($products as $product)
              <option value="{{ $product->name }}"></option>
              @endforeach
            </datalist>
          </div>
          <p class="texto-grande g700">x</p>
          <div class="input-quantidade">
            <h1 class="texto-grande g700">Quantidade(g):</h1>
            <input name="quantidade" class="texto-grande g700" type="text" />
          </div>
          <p class="texto-grande g700">=</p>
          <ul class="nutrientes-lista">
            <li>
              <div class="qtde-total-calorias">
                <h1 class="texto-grande g700">Calorias(Kcal)</h1>
                <div class="calc-calorias-res" id="calc-calorias-res">
                  <p class="texto-grande"></p>
                </div>
              </div>
            </li>
            <li>
              <div class="qtde-total-calorias">
                <h1 class="texto-grande g700">Carboidratos(g)</h1>
                <div class="calc-calorias-res" id="calc-calorias-res">
                  <p class="texto-grande"></p>
                </div>
            </li>
            <li>
              <div class="qtde-total-calorias">
                <h1 class="texto-grande g700">Proteínas(g)</h1>
                <div class="calc-calorias-res" id="calc-calorias-res">
                  <p class="texto-grande"></p>
                </div>
            </li>
            <li>
              <div class="qtde-total-calorias">
                <h1 class="texto-grande g700">Gorduras(g)</h1>
                <div class="calc-calorias-res" id="calc-calorias-res">
                  <p class="texto-grande"></p>
                </div>
            </li>
          </ul>
        </div>
        <div class="form-buttons">
          <button class="botao-vermelho botao btnResetCalcAgua" type="reset">
            limpar
          </button>

          <button class="botao-verde botao btnCalcAgua" type="submit">
            calcular
          </button>
        </div>
      </form>
    </div>
  </section>

  <section class="montar-refeicao">
    <div class="soma-nutrientes-container">
      <h2 class="titulo h2">monte sua refeição</h2>
      <form class="calculo" id="calculo-nutrientes-form">
        <div class="formula-nutrientes soma">
          <div class="input-produto">
            <h1 class="texto-grande g700">Alimento:</h1>
            <input list="produtos" class="texto-grande g700" id="produtos-input" name="produtos-input">
            <datalist id="produtos">
              @foreach($products as $product)
              <option value="{{ $product->name }}"></option>
              @endforeach
            </datalist>
          </div>
          <p class="texto-grande g700">x</p>
          <div class="input-quantidade">
            <h1 class="texto-grande g700">Quantidade(g):</h1>
            <input name="quantidade" class="texto-grande g700" type="text" />
            <button class="deleteItem">
              <div><i class="fas fa-window-close r300"></i>
            </button>
          </div>
        </div>
        <button class="btnAddItem">
          <div><i class="fas fa-plus"></i></div>
        </button>
        <div class="form-buttons">
          <button class="botao-amarelo botao btnResetCalcNutrientes" type="reset">
            reiniciar
          </button>
          <button class="botao-verde botao btnCalcNutrientes" type="submit">
            calcular
          </button>
        </div>
        <div class="nutrientes-total">
          <h3 class="h3 g300">Nutrientes totais da refeição:</h3>
          <ul class="nutrientes-lista soma">
            <li>
              <div class="qtde-total-calorias">
                <h1 class="texto-grande g700">Calorias(Kcal)</h1>
                <div class="calc-calorias-res" id="calc-calorias-res">
                  <p class="texto-grande"></p>
                </div>
              </div>
            </li>
            <li>
              <div class="qtde-total-calorias">
                <h1 class="texto-grande g700">Carboidratos(g)</h1>
                <div class="calc-calorias-res" id="calc-calorias-res">
                  <p class="texto-grande"></p>
                </div>
            </li>
            <li>
              <div class="qtde-total-calorias">
                <h1 class="texto-grande g700">Proteínas(g)</h1>
                <div class="calc-calorias-res" id="calc-calorias-res">
                  <p class="texto-grande"></p>
                </div>
            </li>
            <li>
              <div class="qtde-total-calorias">
                <h1 class="texto-grande g700">Gorduras(g)</h1>
                <div class="calc-calorias-res" id="calc-calorias-res">
                  <p class="texto-grande"></p>
                </div>
            </li>
          </ul>
  </section>

  <!-- <form action="/importar" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="produtos">
    <button type="submit">Enviar</button>
  </form> -->


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
      <a class="link-instagram" href="https://www.instagram.com/vasconcelos_gu/" aria-label="Link para Instagram do Criador" target="_blank">
        <p class="madeby w">Feito com ❤ por Gustavo Vasconcelos</p>
      </a>
    </div>
  </footer>


  @vite(["resources/js/menu.js",
  "resources/js/calculo-nutrientes.js"])

</body>

</html>