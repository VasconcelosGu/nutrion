const btnAddItem = document.querySelector(".btnAddItem");
const btnDeleteItem = document.querySelector(".deleteItem");
const Alimentoitem = document.querySelector(".item-refeição");
const itensLista = document.querySelector(".itens-refeição");


document.addEventListener('DOMContentLoaded', function() {
  var btnAddItem = document.querySelector('.btnAddItem');
  btnAddItem.addEventListener('click', addItem);
});

function addItem(event) {
  event.preventDefault();
  // Criar um novo item-refeicao
  var newItem = document.createElement('li');
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
  var listaItens = document.getElementById('itens-refeicao');
  listaItens.appendChild(newItem);
}

btnDeleteItem.addEventListener('click',(event)=>{
  event.preventDefault();
  Alimentoitem.remove();
});

