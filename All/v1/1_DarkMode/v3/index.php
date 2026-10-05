<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <p> Sidra
            </p>
            <nav>
                <ul>
                    <li> <a href=""> Home </a></li>
                    <li>About
                    <ul class="drop-down">
                        <li> <a href=""> portfolio </a> </li>
                        <li> <a href=""> portfolio </a> </li>
                        <li> <a href=""> portfolio </a> </li>
                    </li>
                    </ul>
                    <li> <a href=""> Galary </a></li>
                    <li> <a href="">Services </a> </li>
                    <li> <a href=""> Contact </a></li>
                    <li>
                        <div class="toggle-btn">
                         <input type="checkbox" name="" id="checkbox">
                         <label for="checkbox" class="toggle-lable">
                            <span class="toggle-ball"></span>
                         </label>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="row hero1">
        <div class="col hero-content">
            <h2>Drop down Menu</h2>
            <h4> Free</h4>
            <button>Get Now</button>
        </div>
        <div class="col hero-img">
            <img src="./images/th (2).jpg" alt="">
        </div>
    <script>
        const toggle_btn =  document.querySelector('#checkbox');
        toggle_btn.addEventListener('change', ()=>{
            if(toggle_btn.checked){
            document.body.classList.add('dark-mode')
        } else{
            document.body.classList.remove('dark-mode')
        }

        })
        
    </script>
</body>
</html>