/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


document.querySelector("#checkbox").addEventListener("change", () => {
    document.querySelector(".container").classList.toggle("dark")
})