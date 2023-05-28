
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta
      name="description"
      content="NutriON, a sua plataforma de cálculos nutricionais!"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!--linkando css e js -->
    @vite(["resources/js/font-awesome.js",
    "resources/css/home/style.css"])
    <link rel="shortcut icon" href="./img/icon.png" type="icon.png" />

    <title>NutriON | Página Inicial</title>
  </head>
  <body>
    <header class="header">
      <div class="header-container">
        <a href="/"><img src="./img/logo_verde.png" alt="logo-nutrion" /></a>
        <button class="toggle-menu"><i class="far fa-bars"></i></button>
        <nav class="header-nav">
          <ul class="header-menu">
            <li><a href="/" class="texto w">Home</a></li>
            <li><a href="/#sobre" class="texto w">Sobre</a></li>
            <li><a href="/#calculos" class="texto w">Cálculos </a></li>
            <li>
              <a href="{{route('contato')}}" class="texto w">Contato</a>
            </li>
          </ul>
          <a href="resources/views/selecao-calculo.blade.php" class="botao botao-branco"
            >calcular</a
          >
        </nav>
      </div>
    </header>

    <section class="hero">
      <div class="hero-container">
        <img src="./img/logo_branca.png" alt="" />
        <h1 class="h3 w">a melhor plataforma para cálculos nutricionais!</h1>
        <a class="botao botao-branco" href="resources/views/selecao-calculo.blade.php"
          >começar!</a
        >
      </div>
    </section>

    <main>
      <section class="sobre" id="sobre">
        <div class="sobre-container">
          <div class="sobre-texto">
            <h1 class="titulo">sobre<span>.</span></h1>
            <p class="texto-grande g700">
              O NutriON é uma plataforma online totalmente gratuita que tem como
              objetivo fazer alguns cálculos nutricionais.
            </p>
            <p class="texto-grande g700">
              A ideia da plataforma surgiu de uma percepção de uma dor que
              muitos profissionais e interessados em nutrição têm, pois muitas
              vezes precisam fazer certos cálculos manualmente ou pagam uma
              plataforma para isso.
            </p>
            <p class="texto-grande g700">
              O intuito dessa plataforma é que a comunidade possa também
              contribuir para que seja cada vez mais completa, com vários tipos
              de cálculo e tipos de alimento para o usuário consiga montar uma
              dieta completa e variada!
            </p>
          </div>
          <img
            src="./img/sobre.webp"
            alt="imagem ilustrativa para a seção sobre"
          />
        </div>
      </section>

      <section class="calculos" id="calculos">
        <div class="calculos-container">
          <h1 class="titulo">cálculos<span>.</span></h1>
          <div class="tipo-calculo">
            <h2 class="h3 g500">Cálculo de calorias</h2>
            <div class="tipo-calculo-texto">
              <p class="texto-grande g700">
                O cálculo de calorias de um alimento é feito com base em sua
                composição nutricional, que inclui informações sobre os
                macronutrientes (proteínas, carboidratos e gorduras) e os
                micronutrientes (vitaminas e minerais) presentes no alimento.
              </p>
              <p class="texto-grande g700">
                Existem diferentes métodos para calcular as calorias de um
                alimento, mas um dos mais comuns é através da utilização de
                tabelas nutricionais. Essas tabelas fornecem informações
                detalhadas sobre a quantidade de nutrientes e calorias presentes
                em uma determinada porção de alimento.
              </p>
              <p class="texto-grande g700">
                O cálculo é feito da seguinte forma:
              </p>
              <div class="conteudo-centro">
                <p class="texto-grande g700">
                  alimento * quantidade (g) = calorias totais (Kcal)
                </p>
                <a href="resources/views/calc-calorias.blade.php" class="botao botao-verde"> fazer cálculo </a>
              </div>
            </div>
          </div>

          <div class="tipo-calculo">
            <h2 class="h3 g500">Cálculo de IMC</h2>
            <div class="tipo-calculo-texto">
              <p class="texto-grande g700">
                O IMC é reconhecido como padrão internacional para avaliar o
                grau de sobrepeso e obesidade. É calculado dividindo o peso (em
                kg) pela altura ao quadrado (em metros).
              </p>
              <p class="texto-grande g700">
                O cálculo é feito da seguinte forma:
              </p>
              <div class="conteudo-centro">
                <p class="texto-grande g700">peso (kg) / altura² (m) = IMC</p>
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
                <button class="buttonOpen botao botao-verde" data-id="1">
                  fazer cálculo
                </button>
                <dialog data-id="1">
                  <section class="calculo">
                    <div class="calculo-container">
                      <button class="buttonClose w" data-id="1">
                        <i class="fas fa-times"></i>
                      </button>
                      <h1 class="titulo">cálculo de IMC</h1>
                      <p class="texto-grande g700">
                        Digite o peso e a altura para descobrir qual é o IMC
                        (utilize "." ao invés de ",")
                      </p>
                      <form class="calculo" id="calculo-imc-form">
                        <div class="formula">
                          <div class="input-peso">
                            <h1 class="texto-grande g700">Peso(kg)</h1>
                            <input
                              name="peso"
                              class="texto-grande g700"
                              type="text"
                            />
                          </div>
                          <p class="texto-grande g700">/</p>
                          <div class="input-altura">
                            <h1 class="texto-grande g700">Altura(m)</h1>
                            <input
                              name="altura"
                              class="texto-grande g700"
                              type="text"
                            />
                          </div>
                          <p class="texto-grande g700">=</p>
                          <div class="imc-resultado">
                            <h1 class="texto-grande g700">IMC:</h1>
                            <div class="calc-res" id="calc-imc-res">
                              <p class="texto-grande"></p>
                            </div>
                          </div>
                        </div>
                        <div class="form-buttons">
                          <button
                            class="botao-vermelho botao btnResetCalcImc"
                            type="reset"
                          >
                            limpar
                          </button>

                          <button
                            class="botao-verde botao btnCalcIMC"
                            type="submit"
                          >
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
                </dialog>
              </div>
            </div>
          </div>

          <div class="tipo-calculo">
            <h2 class="h3 g500">Cálculo de litros de água</h2>
            <div class="tipo-calculo-texto">
              <p class="texto-grande g700">
                Um cálculo recomendado pelos especialistas é ingerir 35ml de
                água por cada quilo. Assim, a quantidade de água ingerida se
                aproxima mais da sua necessidade individual.
              </p>
              <p class="texto-grande g700">
                O cálculo é feito da seguinte forma:
              </p>
              <div class="conteudo-centro">
                <p class="texto-grande g700">
                  peso (kg) x 0,035 = quantidade (L)
                </p>
                <button class="botao botao-verde buttonOpen" data-id="2">
                  fazer cálculo
                </button>
                <dialog data-id="2">
                  <section class="calculo">
                    <div class="calculo-container">
                      <button class="buttonClose w" data-id="2">
                        <i class="fas fa-times"></i>
                      </button>
                      <h1 class="titulo">cálculo de litros de água</h1>
                      <p class="texto-grande g700">
                        Digite o peso para saber que quantidade de água
                        recomenda-se beber diariamente
                      </p>
                      <form class="calculo" id="calculo-agua-form">
                        <div class="formula">
                          <div class="input-peso">
                            <h1 class="texto-grande g700">Peso(kg)</h1>
                            <input
                              name="peso"
                              class="texto-grande g700"
                              type="text"
                            />
                          </div>
                          <p class="texto-grande g700">x</p>
                          <p class="texto-grande g700">0,035</p>
                          <p class="texto-grande g700">=</p>
                          <div class="qtde-total-litros">
                            <h1 class="texto-grande g700">Quantidade (L)</h1>
                            <div class="calc-res" id="calc-agua-res">
                              <p class="texto-grande"></p>
                            </div>
                          </div>
                        </div>
                        <div class="form-buttons">
                          <button
                            class="botao-vermelho botao btnResetCalcAgua"
                            type="reset"
                          >
                            limpar
                          </button>

                          <button
                            class="botao-verde botao btnCalcAgua"
                            type="submit"
                          >
                            calcular
                          </button>
                        </div>
                      </form>
                    </div>
                  </section>
                </dialog>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

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
    "resources/js/modal.js",
    "resources/js/calculo-agua.js",
    "resources/js/calculo-imc.js"
    ])
  </body>
</html>
