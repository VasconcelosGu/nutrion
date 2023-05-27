const formImc = document.querySelector("#calculo-imc-form")
const textoResultadoImc = document.querySelector("#calc-imc-res p")
const btnResetCalcImc = document.querySelector(".btnResetCalcImc")


formImc.addEventListener("submit",(event)=>{
  event.preventDefault()
  const pesoUsuario =  event.target.elements.peso.value
  const alturaUsuario =  event.target.elements.altura.value
  CalculoImc(pesoUsuario, alturaUsuario)
})

function CalculoImc(peso, altura){
  let imc = peso / (altura*altura)
  textoResultadoImc.innerText = imc.toLocaleString("pt-br",{
    style: "decimal"
  })
}

btnResetCalcImc.addEventListener('click',()=>{
  textoResultadoImc.innerText = ""
})