const btn = document.querySelector(".menuBtn")
const menu = document.querySelector(".menu")

btn.addEventListener('click', () => {

    menu.classList.contains('hidden') ? menu.classList.remove('hidden') : menu.classList.add('hidden')

})
