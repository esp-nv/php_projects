
"use strict";

const toggleSwitch = document.querySelector('input[type="checkbox"]');
const nav = document.querySelector("nav");
const toggleIcon = document.getElementById("toggle-icon");
const img1 = document.getElementById("img1");
const img2 = document.getElementById("img2");
const img3 = document.getElementById("img3");
const textBox = document.getElementById("text-box");
let mode = "";
const DARK_THEME = "dark";
const LIGHT_THEME = "light";

function toggleMode() {
  nav.style.backgroundColor =
    mode === DARK_THEME ? "rgb(0 0 0 / 50%)" : "rgb(255 255 255 / 50%)";
  textBox.style.backgroundColor =
    mode === DARK_THEME ? "rgb(255 255 255 / 50%)" : "rgb(0 0 0 / 50%)";
  toggleIcon.children[0].textContent =
    mode === DARK_THEME ? "Dark Mode" : "Light Mode";
  img1.src =
    mode === DARK_THEME
      ? "img/undraw_proud_coder_dark.svg"
      : "img/undraw_proud_coder_light.svg";
  img2.src =
    mode === DARK_THEME
      ? "img/undraw_feeling_proud_dark.svg"
      : "img/undraw_feeling_proud_light.svg";
  img3.src =
    mode === DARK_THEME
      ? "img/undraw_conceptual_idea_dark.svg"
      : "img/undraw_conceptual_idea_light.svg";
  mode === DARK_THEME
    ? toggleIcon.children[1].classList.replace("fa-sun", "fa-moon")
    : toggleIcon.children[1].classList.replace("fa-moon", "fa-sun");
}

function switchTheme(e) {
  if (e.target.checked) {
    mode = DARK_THEME;
    document.documentElement.setAttribute("data-theme", `${mode}`);
    localStorage.setItem("theme", mode);
    toggleMode();
  } else {
    mode = LIGHT_THEME;
    document.documentElement.setAttribute("data-theme", `${mode}`);
    localStorage.setItem("theme", mode);
    toggleMode();
  }
}

toggleSwitch.addEventListener("change", switchTheme);

function checkTheme() {
  mode = localStorage.getItem("theme");
  if (mode) {
    document.documentElement.setAttribute("data-theme", `${mode}`);
    toggleMode();
  }
}

window.addEventListener("load", checkTheme);
