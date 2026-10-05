/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

const sidenav = document.querySelector(".sidenav");
const hamburger = document.querySelector(".hamburger");

hamburger.addEventListener("click",()=> {
    hamburger.classList.toggle("active");
    sidenav.classList.toggle("show");
});
