const formAgua = document.querySelector("#calculo-agua-form")
const textoResultadoAgua = document.querySelector("#calc-agua-res p")
const btnResetCalcAgua = document.querySelector(".btnResetCalcAgua")


formAgua.addEventListener("submit",(event)=>{
  event.preventDefault()
  const pesoUsuario =  event.target.elements.peso.value
  CalculoAgua(pesoUsuario)
})

function CalculoAgua(peso){
  let litrosTotal = peso * 0.035
  textoResultadoAgua.innerText = litrosTotal.toLocaleString("pt-br",{
    style: "decimal",
  })
}

btnResetCalcAgua.addEventListener('click',()=>{
  textoResultadoAgua.innerText = ""
})