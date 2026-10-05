
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
 

  <title>The Ultimate Theme Toggle™️</title>

  
  
<style>
[data-theme="light"] {
   --color-bg: #ffffff;
   --color-fg: #000000;
}

[data-theme="dark"] {
   --color-bg: #000000;
   --color-fg: #ffffff;
}

body {
  background-color: var(--color-bg);
  color: var(--color-fg);
  display: grid;
  min-height: 100vh;
  place-items: center;
}

button {
  font-size: 2rem;
  font-weight: bold;
  padding: 0.5rem 1rem;
  transition: all var(--global-transition-time) ease-in-out;
  border-radius: 2rem;
  cursor: pointer;
  color: var(--color-fg);
  background-color: var(--color-bg);
  border: 0.25rem solid var(--color-fg);
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <html data-theme="light">
  <body>
<button
    type="button"
    data-theme-toggle
    aria-label="Change to light theme"
  >Change to light theme</button>
  </body>
</html>
  
      <script id="rendered-js" >
/**
* Utility function to calculate the current theme setting.
* Look for a local storage value.
* Fall back to system setting.
* Fall back to light mode.
*/
function calculateSettingAsThemeString({ localStorageTheme, systemSettingDark }) {
  if (localStorageTheme !== null) {
    return localStorageTheme;
  }

  if (systemSettingDark.matches) {
    return "dark";
  }

  return "light";
}

/**
* Utility function to update the button text and aria-label.
*/
function updateButton({ buttonEl, isDark }) {
  const newCta = isDark ? "Change to light theme" : "Change to dark theme";
  // use an aria-label if you are omitting text on the button
  // and using a sun/moon icon, for example
  buttonEl.setAttribute("aria-label", newCta);
  buttonEl.innerText = newCta;
}

/**
* Utility function to update the theme setting on the html tag
*/
function updateThemeOnHtmlEl({ theme }) {
  document.querySelector("html").setAttribute("data-theme", theme);
}


/**
* On page load:
*/

/**
* 1. Grab what we need from the DOM and system settings on page load
*/
const button = document.querySelector("[data-theme-toggle]");
const localStorageTheme = localStorage.getItem("theme");
const systemSettingDark = window.matchMedia("(prefers-color-scheme: dark)");

/**
* 2. Work out the current site settings
*/
let currentThemeSetting = calculateSettingAsThemeString({ localStorageTheme, systemSettingDark });

/**
* 3. Update the theme setting and button text accoridng to current settings
*/
updateButton({ buttonEl: button, isDark: currentThemeSetting === "dark" });
updateThemeOnHtmlEl({ theme: currentThemeSetting });

/**
* 4. Add an event listener to toggle the theme
*/
button.addEventListener("click", event => {
  const newTheme = currentThemeSetting === "dark" ? "light" : "dark";

  localStorage.setItem("theme", newTheme);
  updateButton({ buttonEl: button, isDark: newTheme === "dark" });
  updateThemeOnHtmlEl({ theme: newTheme });

  currentThemeSetting = newTheme;
});
//# sourceURL=pen.js
    </script>

  
</body>

</html>
