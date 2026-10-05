  
<style>
    .navbar-10sets {
        display: flex;
        background: #c8daf7;
        justify-content: center;
        padding: 0.5rem;
        flex-wrap: wrap;
        border-radius: 1rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        position: relative;
        padding: 0.75rem;
        margin: 0.2rem;
    }
    .navbar-10sets a {
        color: hsl(0, 0%, 100%);
        text-decoration: none;
        padding: 0.75rem;
        margin: 0.2rem;
        border-radius: 50%;
        width: 3rem;
        height: 3rem;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
        background-color: hsl(0, 0%, 20%);
    }
    .navbar-10sets a:hover {
        background-color: #b180ed;
        transform: scale(1.1);
    }
    .navbar-10sets a.active {
        background-color: #5964ff;
        color: hsl(0, 0%, 100%);
        font-weight: bold;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }

    .navbar-toggle {
        display: none;
        position: absolute;
        top: 0.5rem;
        right: 1rem;
        background-color: hsl(0, 0%, 20%);
        color: hsl(0, 0%, 100%);
        border: none;
        border-radius: 50%;
        width: 2.5rem;
        height: 2.5rem;
        font-size: 1.5rem;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        z-index: 1000;
    }

    .navbar-toggle:hover {
        background-color: hsl(0, 0%, 30%);
    }

    .navbar-10sets.hidden {
        display: none;
    }

    @media (max-width: 600px) {
        .navbar-toggle {
            display: flex;
        }
        .navbar-10sets {
            align-items: center;
        }
        .navbar-10sets a {
            margin: 0.5rem 0;
        }
    }
</style>
<script>
    window.console = window.console || function (t) {};
</script>
<button class="navbar-toggle" onclick="toggleNavbar()">x</button>
<div class="navbar-10sets">
    <a href="#" id="set1" class="active">Set 1</a>
    <a href="#" id="set2">Set 2</a>
    <a href="#" id="set3">Set 3</a>
    <a href="#" id="set4">Set 4</a>
    <a href="#" id="set5">Set 5</a>
    <a href="#" id="set6">Set 6</a>
    <a href="#" id="set7">Set 7</a>
    <a href="#" id="set8">Set 8</a>
    <a href="#" id="set9">Set 9</a>
    <a href="#" id="set10">Set 10</a>
</div>

<script id="rendered-js" >
    function toggleNavbar() {
        const navbar = document.querySelector(".navbar-10sets");
        navbar.classList.toggle("hidden");
    }
//# sourceURL=pen.js
</script>