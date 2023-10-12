const signin_btn = document.querySelector('#sign-btn')
const form = document.querySelector('#form')
const out_btn = document.querySelector('#out-btn')
signin_btn.addEventListener('click', () => {
signin_btn.closest('ul').classList.add('hidden-element')
form.classList.toggle('hidden-element')
}) 
out_btn.addEventListener('click', () => {
    form.classList.toggle('hidden-element')
    signin_btn.closest('ul').classList.remove('hidden-element')
})
