const produtosInput = document.getElementById('produtos-input');

// Função para buscar e calcular os nutrientes do produto
function calcularNutrientes() {
  const nomeProduto = produtosInput.value.trim().toLowerCase();

  // Busque o produto correspondente no array "produtos" com base no nome
  const produto = produtos.find(item => item.name.toLowerCase() === nomeProduto);

  if (produto) {
    // Realize o cálculo dos nutrientes com base nos dados do produto
    const nutrientes = {
      proteina: produto.proteina,
      carboidrato: produto.carboidrato,
      gordura: produto.gordura
    };

    // Exiba os nutrientes calculados ou utilize-os conforme necessário
    console.log(nutrientes);
  } else {
    // Caso o produto não seja encontrado, exiba uma mensagem de erro
    console.log('Produto não encontrado');
  }
}

// Adicione um event listener para o evento "input"
produtosInput.addEventListener('input', calcularNutrientes);
