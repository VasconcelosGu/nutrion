const btnCloseModalLogin = document.querySelector(".buttonCloseLogin")
const btnOpenModalLogin = document.querySelector(".btnOpenLogin")
const modalLogin = document.querySelector(".dialogLogin")
console.log(btnCloseModalLogin,btnOpenModalLogin,modalLogin)

btnOpenModalLogin.addEventListener('click',()=>{
  modalLogin.showModal();
})

btnCloseModalLogin.addEventListener('click',()=>{
  modalLogin.close();
})


