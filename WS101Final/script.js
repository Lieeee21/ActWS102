const btnContainer = document.querySelector('ul');
const btns = document.querySelector('li a');

btnContainer.forEach(liAactive => {
    liAactive.addEventListener(`click`, function () {
        btnContainer.querySelector(`.active`).classList.remove(` active`)
        liAactive.classList.add(`active`)
    })
})