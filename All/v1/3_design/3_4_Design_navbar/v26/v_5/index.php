<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>ver1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <script src="script.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap");
            @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&display=swap");

            :root {
                --color-primary-dark: #2e323f;
                --color-primary: #3b4050;
                --color-primary-light: #a6adbf;
                --color-accent-darkest: #7e725b;
                --color-accent-dark: #94866c;
                --color-accent: #a59678;
                --color-accent-light: #beac8a;
                --color-accent-lightest: #f5f3ee;

                --font-heading: "Oswald", sans-serif;
                --font-base: "Montserrat", sans-serif;

                --font-size-body: 1rem;
                --font-size-body-md: 1.125rem;
                --font-size-body-lg: 1.3125rem;
                --font-size-body-xl: 1.5rem;

                --font-size-heading-xs: 1rem;
                --font-size-heading-sm: 1.125rem;
                --font-size-heading-md: 1.5rem;
                --font-size-heading-lg: 1.875rem;
                --font-size-heading-xl: 2.25rem;
                --font-size-heading-2xl: 4rem;
                --font-size-heading-3xl: 5.625rem;
            }

            html {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                box-sizing: border-box;
            }

            *,
            *::before,
            *::after {
                box-sizing: inherit;
                margin: 0;
                padding: 0;
                color: inherit;
                font: inherit;
                line-height: inherit;
            }

            body {
                min-height: 100dvh;
                font: normal var(--font-size-body) / 1.5 var(--font-base);
                /* Hides the navigation drawer with visibility: hidden and translateX: 100% */
                overflow-x: hidden;
            }

            a {
                display: inline-block;
            }

            img {
                max-width: 100%;
                display: block;
            }

            ul {
                list-style-position: inside;
                list-style-type: none;
            }

            button {
                background: none;
                border: none;
            }

            .sr-only {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border-width: 0;
            }

            .container {
                /* max-width: 1200px */
                width: min(90%, 75em);
                margin-inline: auto;
            }

            .btn {
                padding: 0.6em 1.75em;
                background-color: var(--color-accent-darkest);
                border-radius: 9999px;
                cursor: pointer;
                font-family: var(--font-heading);
                font-weight: bold;
                letter-spacing: 1px;
                text-decoration: none;
                text-transform: uppercase;
                &:link {
                    background-color: var(--color-accent-darkest);
                }
                &:hover {
                    filter: brightness(130%);
                }
                &:active {
                    filter: brightness(95%);
                }
                &--secondary {
                    background-color: white;
                    color: var(--color-primary-dark);
                    &:link {
                        background-color: rgba(255, 255, 255, 0.95);
                    }
                    &:visited {
                        background-color: var(--color-primary-light);
                    }
                    &:hover {
                        background-color: white;
                    }
                    &:active {
                        filter: brightness(90%);
                    }
                }
            }

            .navlink {
                color: inherit;
                cursor: pointer;
                &,
                &:link {
                    color: var(--color-primary-light);
                    text-underline-offset: 0.3em;
                }
                &:visited {
                    color: var(--color-primary-light);
                }
                &:focus-within {
                    outline-offset: 0.3em;
                }
                &:hover {
                    color: white;
                    text-decoration-color: white;
                }
                &:active {
                    color: var(--color-accent);
                    text-decoration-color: var(--color-accent);
                }
            }

            .header {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 2;

                padding-block: 1rem;
                background-color: var(--color-primary-dark);
                color: white;

                text-align: center;
            }

            /* Remove undesired offset to perfectly center vertically */
            .header__logo {
                display: block;
                & img {
                    margin: 0 auto;
                }
            }

            .header__burger {
                --_height: 4px;
                --_width: 2em;
                position: relative;
                margin-inline: auto;
                &,
                &::before,
                &::after {
                    height: var(--_height);
                    width: var(--_width);
                    display: block;
                    background-color: white;
                    border-radius: 9999px;
                }
                &::before,
                &::after {
                    content: "";
                    position: absolute;
                    transition: all 150ms cubic-bezier(0.4, 0, 0.2, 1);
                }
                &::before {
                    translate: 0 calc(-100% - var(--_height));
                }
                &::after {
                    translate: 0 calc(100% + var(--_height));
                }
                /* Animation on burger menu button */
                .header__menu-toggle[aria-expanded="true"] & {
                    height: 0;
                    &::before,
                    &::after {
                        translate: 0;
                    }
                    &::before {
                        rotate: 45deg;
                    }
                    &::after {
                        rotate: -45deg;
                    }
                }
            }

            .header__nav {
                /* Absolutely positioned relatively to its closest positioned ancestor (container) */
                position: absolute;
                top: 100%;
                right: 0;

                width: 100%;
                background-color: var(--color-primary-dark);

                /* Use visibility: hidden both prevents interacting with the navigation and allows using transitions (display: none cannot be animated) */
                visibility: hidden;
                /* Moves the navigation out of the screen for a "drawer" animation when the menu is opened */
                /* To prevent undesirable horizontal scrollbar, overflow-x: hidden must be set to the closest fixed parent (body since does not work on container...) */
                transform: translateX(100%);
                /* Opacity is used here to add a fade-out effect (fade-in also exists but not visible due to a fast transition) */
                opacity: 0;
                /* Transition (occurs on close because overrident by another transition set to the .visible class) */
                transition: visibility 1.5s 150ms ease, opacity 1.5s 150ms ease,
                    transform 1.5s ease;

                &.visible {
                    visibility: visible;
                    opacity: 1;
                    transform: translateX(0);
                    /* Overrides the transition property set on the navigation, which allow to create different effects on opening/closing the menu */
                    transition: transform 500ms ease;
                }
            }

            .header__navlist,
            .header__ctalist {
                margin-block: 3em;
                display: flex;
                flex-direction: column;
                gap: 1.5em;
            }
            .header__navlink,
            .header__cta {
                text-transform: uppercase;
            }
            .header__cta {
                text-decoration: none;
            }

            .header__menu-toggle {
                /* Asbolutely positioned relatively to its closest positioned ancestor (header) */
                position: absolute;
                top: 50%;
                right: 5%;

                width: 3em;
                height: 3em;

                background-color: var(--color-accent-darkest);
                border-radius: 9999px;
                cursor: pointer;
                transform: translateY(-50%);
                transition: all 150ms cubic-bezier(0.4, 0, 0.2, 1);
            }
            .header__menu-toggle:hover {
                filter: brightness(110%);
            }

            @media (min-width: 700px) {
                body {
                    font-size: var(--font-size-body-md);
                }
                .header {
                    font-size: var(--font-size-body);
                }
                .header__container {
                    display: flex;
                    align-items: center;
                }
                .header__logo img {
                    margin: 0;
                }
                .header__logo__menu-toggle {
                    display: none;
                }
                .header__menu-toggle {
                    display: none;
                }
                .header__nav {
                    /* Reset all mobile animationr related properties */
                    position: static;
                    visibility: visible;
                    transform: none;
                    opacity: 1;
                    transition: none;

                    flex-grow: 1;
                    display: flex;
                    gap: clamp(1.5em, 4vw, 3em);
                    justify-content: space-between;
                    align-items: center;
                }
                .header__navlist,
                .header__ctalist {
                    margin-block: 0;
                    flex-direction: row;
                }
                .header__navlist {
                    margin-left: auto;
                }
            }

            @media (min-width: 1000px) {
                .row {
                    display: flex;
                    gap: 8em;
                }
                .header__nav {
                    gap: 5em;
                }
                .header__navlist {
                    gap: 3em;
                }
            }
        </style>

        <script>
            window.console = window.console || function (t) {};
        </script>


    </head>
    <body translate="no">
        <header class="header">
            <div class="container header__container">
                <a href="#" class="header__logo">
                  <!--       <img src="assets/logo.svg" alt="Homepage" /> -->
                    LOGO
                </a>
                <button type="button" aria-controls="primary-navigation" aria-expanded="false" class="header__menu-toggle">
                    <!-- It is recommended to include an accessible name for an interactive element, and then use a class to visually hide the text but keep it accessible to screen reader (DO NOT use display: none since it will actually take the accessible name out of the DOM and a screen reader cannot read it!).
                           (Note: we could also put an aria-label attribute on the button but using accessible name is preferred) -->
                    <span class="sr-only">Navigation menu</span>
                    <span class="header__burger"></span>
                </button>
                <nav id="primary-navigation" aria-label="Site primary" class="header__nav">
                    <ul class="header__navlist">
                        <li>
                            <a href="#" aria-current="page" class="header__navlink navlink">Home</a>
                        </li>
                        <li><a href="#" class="header__navlink navlink">About</a></li>
                        <li><a href="#" class="header__navlink navlink">Contact</a></li>
                    </ul>
                    <ul class="header__ctalist">
                        <li>
                            <a href="#" class="header__cta btn btn--secondary">Sign In</a>
                        </li>
                        <li><a href="#" class="header__cta btn">Sign Up</a></li>
                    </ul>
                </nav>
            </div>

            <script id="rendered-js" >
// SOLUTION 1: functionnal programming
// const navBtn = document.querySelector('.header__menu-toggle');
// const primaryNav = document.querySelector('#navigation');

// const toggleNav = () => {
//   const isOpen = navBtn.getAttribute('aria-expanded') === 'true';
//   // toggle aria-expanded to true to menu button
//   navBtn.setAttribute('aria-expanded', `${!isOpen}`);
//   // toggle class 'visible' to primary navigation
//   primaryNav.classList.toggle('visible');
// };
// const closeNav = (e) => {
//   const isOpen = navBtn.getAttribute('aria-expanded') === 'true';

//   if (e.key === 'Escape' && isOpen) {
//     navBtn.setAttribute('aria-expanded', 'false');
//     primaryNav.classList.remove('visible');
//     navBtn.focus();
//   }
// };

// navBtn.addEventListener('click', toggleNav);
// // Allow user to close the open nav menu by pressing the Esc key on keyboard
// primaryNav.addEventListener('keydown', closeNav);

// SOLUTION 2: OOP
                const navBtn = document.querySelector(".header__menu-toggle");

                class MenuBtn {
                    constructor(domNode) {
                        this.btnElement = domNode;
                        this.isOpen = this.btnElement.getAttribute("aria-expanded") === "true";

                        const controlsId = this.btnElement.getAttribute("aria-controls");
                        this.navEl = document.getElementById(controlsId);

                        // Add event listeners
                        this.btnElement.addEventListener("click", this.onButtonClick.bind(this));
                        this.navEl.addEventListener("keydown", this.onKeyPressed.bind(this));
                    }

                    onButtonClick() {
                        this.toggleMenu(!this.isOpen);
                    }

                    onKeyPressed(e) {
                        this.closeNav(e);
                    }

                    openMenu() {
                        this.navEl.classList.add("visible");
                    }

                    closeMenu() {
                        this.navEl.classList.remove("visible");
                    }

                    toggleMenu(open) {
                        // Return if same state
                        if (open === this.isOpen) {
                            return;
                        }

                        // Update the internal state
                        this.isOpen = open;

                        // Handle DOM updates
                        this.btnElement.setAttribute("aria-expanded", `${open}`);
                        if (open ? this.openMenu() : this.closeMenu())
                            ;
                    }

                    closeNav(evt) {
                        // Return if menu already closed
                        if (this.open)
                            return;
                        // Return if any other key than 'Escape is pressed'
                        if (evt.key !== "Escape")
                            return;

                        // Otherwise
                        this.toggleMenu(false);

                        // Set focus back to the menu button
                        this.btnElement.focus();
                    }
                }

// Init menu Button
                const menuBtn = new MenuBtn(navBtn);
//# sourceURL=pen.js
            </script>

    </body>
</html>
