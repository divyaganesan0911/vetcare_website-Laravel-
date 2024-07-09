const click = document.getElementById('click-btn')
const qurey = document.getElementById('qurey')
const close_icon = document.getElementById('close-icon')


click.addEventListener('click', () => {
    qurey.classList.toggle('qurey-show')
})
close_icon.addEventListener('click', () => {
    qurey.classList.remove('qurey-show')
})