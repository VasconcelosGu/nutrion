const btnOpenModal = document.querySelectorAll(".buttonOpen")
const btnCloseModal = document.querySelectorAll(".buttonClose")
const modal = document.querySelectorAll("dialog")


btnOpenModal.forEach((button) =>(
  button.addEventListener('click',() =>{
    const modalRelative = document.querySelector("dialog[data-id='" + button.dataset.id + "']");
    modalRelative.showModal()
    })
));

  btnCloseModal.forEach((button) =>(
    button.addEventListener('click',() =>{
      const modalRelative = document.querySelector("dialog[data-id='" + button.dataset.id + "']");
      modalRelative.close()
      })
  ));


