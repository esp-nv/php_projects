let colorButtons = document.querySelectorAll('.color-button');

colorButtons.forEach(color =>{
    color.addEventListener('click',() =>{
        let dataColor = color.getAttribute('data-color');
        document.querySelector(':root').style.setProperty('--main-color', dataColor);
    })
});