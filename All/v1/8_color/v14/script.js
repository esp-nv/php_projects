"use strict"

let btn = document.getElementById('switch')
let body = document.querySelector('body')

btn.addEventListener('click', () => {
    body.classList.toggle('dark')
});