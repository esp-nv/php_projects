
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />



  
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


  <title>Responsive Navbar</title>

    <link rel="canonical" href="https://codepen.io/Amanda___/pen/mdgWpmb">
  
  
  
  
<style>
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins','Open Sans',Arial;
}

body {
    min-height: 100vh;
    background-image: url('https://i.pinimg.com/564x/9d/1f/2e/9d1f2e441590c09d737125a61b5f5281.jpg');
    background-size: cover;
    background-position: center;
}


.nav-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 1.5rem;
    height: 60px;
    background-color: rgba(0, 0, 0, 0.2);
}

.logo {
    color: aliceblue;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 1.25rem;
    margin-left: 12px;
    cursor: pointer;
}

.fas {
    color: white;
    font-size: 1.25rem;
    cursor: pointer;
}

.list-nav-bar {
    list-style: none;
    text-transform: uppercase;
    display: flex;
    gap: 20px;
}

.list-item a {
    cursor: pointer;
    font-size: 1.25rem;
    text-decoration: none;
    color: #fff;
    text-align: center;
    margin-left: 0.5rem;
    letter-spacing: 0.1rem;
}

.list-item a:hover {
    color: #a0a0a0;
}

.burger-menu {
    display: none;
}

.main-content {
    text-align: center;
    margin-top: 25vh;
}

.main-content h1 {
    color: #fff;
    font-size: 3.5rem;
}


@media screen and (max-width: 768px) {

    .list-item a {
        font-size: 0.875rem;
    }

    .logo {
        font-size: 0.875rem;
    }
}

@media screen and (max-width: 578px) {

    .list-item a {
        font-size: 1rem;

    }

    .list-nav-bar.active {
        right: 0;
    }

    .list-nav-bar {
        display: flex;
        position: fixed;
        right: -100%;
        top: 60px;
        width: 35%;
        background-color: rgba(0, 0, 0, 0.2);
        text-align: center;
        flex-direction: column;
        transition: 0.7s;
        gap: 18px;
        border-radius: 0 0 10px 10px;
    }

    .burger-menu {
        display: block;
        cursor: pointer;
    }
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <nav class="nav-bar">
        <div class="icon-nav">
            <i class="fas fa-moon"></i>
            <span class="logo">Your logo</span>
        </div>

        <ul class="list-nav-bar active">
            <li class="list-item"><a href="#">home</a></li>
            <li class="list-item"><a href="#">pricing</a></li>
            <li class="list-item"><a href="#">faq</a></li>
            <li class="list-item"><a href="#">about</a></li>
            <li class="list-item"><a href="#">contact</a></li>
        </ul>
        <div class="fas burger-menu" id="burger-menu">&#9776;</div>
    </nav>

    <div class="main-content">
        <h1>Responsive Navbar</h1>
    </div>
  
      <script id="rendered-js" >
const hamburguer = document.getElementById("burger-menu");
const navMenu = document.querySelector(".list-nav-bar");


hamburguer.addEventListener("click", () => {
  hamburguer.classList.toggle('active');
  navMenu.classList.toggle('active');
});
//# sourceURL=pen.js
    </script>

  
</body>

</html>
