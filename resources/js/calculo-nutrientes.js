const btnAddItem = document.querySelector(".btnAddItem");
const btnDeleteItem = document.querySelector(".deleteItem");
const Alimentoitem = document.querySelector(".item-refeição");
const itensLista = document.querySelector(".itens-refeição");



const alimentoForm = document.querySelector( "#calculo-nutrientes-form");
const textoResultadoCalorias = document.querySelector("#calc-calorias-res p");
const textoResultadoProteinas = document.querySelector("#calc-proteinas-res p");
const textoResultadoCarboidratos = document.querySelector("#calc-carbs-res p");
const textoResultadoGorduras = document.querySelector("#calc-gorduras-res p");

const btnReset = document.querySelector(".btnResetCalcNutrientes")


alimentoForm.addEventListener('submit', function(event){
    event.preventDefault();
    const quantidadeAlimento =  event.target.elements.quantidade.value;
    const alimentoSelecionado = event.target.elements["produtos-input"].value;
    const alimento = produtos.find( product => product.id === Number(alimentoSelecionado));

    textoResultadoCalorias.innerText = (alimento.calories * quantidadeAlimento).toFixed(2);
    textoResultadoProteinas.innerText = (alimento.proteins * quantidadeAlimento).toFixed(2);
    textoResultadoCarboidratos.innerText = (alimento.carbs * quantidadeAlimento).toFixed(2);
    textoResultadoGorduras.innerText = (alimento.lipideos * quantidadeAlimento).toFixed(2);
});

btnReset.addEventListener('click',()=>{
  textoResultadoCalorias.innerText = "";
  textoResultadoProteinas.innerText = "";
  textoResultadoCarboidratos.innerText = "";
  textoResultadoGorduras.innerText = "";
})





document.addEventListener('DOMContentLoaded', function() {
  var btnAddItem = document.querySelector('.btnAddItem');
  btnAddItem.addEventListener('click', addItem);
});

function addItem(event) {
  event.preventDefault();
  // Criar um novo item-refeicao
  const newItem = document.createElement('li');
  newItem.className = 'item-refeição';
  // Conteúdo do novo item-refeicao
  newItem.innerHTML = `
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
          <div><i class="fas fa-window-close r300"></i></div>
        </button>
      </div>
    </div>
  `;
  // Adicionar o novo item-refeicao à lista de itens-refeicao
  const listaItens = document.getElementById('itens-refeicao');
  listaItens.appendChild(newItem);

  const deleteButton = newItem.querySelector('.deleteItem');
    deleteButton.addEventListener('click', function() {
      listaItens.removeChild(newItem);
    });
}


