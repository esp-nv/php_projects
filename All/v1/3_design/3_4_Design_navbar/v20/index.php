<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apps</title>
        <link rel="stylesheet" href="bootstrap.min.css.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="frem">
            <p>Apps</p>
            <span style="--i:0;--x:-1;--y:0;">1
                <ion-icon name="camera-outline"></ion-icon>
            </span>
            <span style="--i:1;--x:1;--y:0;">2
                <ion-icon name="diamond-outline"></ion-icon>
            </span>
            <span style="--i:2;--x:0;--y:-1;">3
                <ion-icon name="chatbubble-outline"></ion-icon>
            </span>
            <span style="--i:3;--x:0;--y:1;">4
                <ion-icon name="alarm-outline"></ion-icon>
            </span>
            <span style="--i:4;--x:-1;--y:1;">5
                <ion-icon name="game-controller-outline"></ion-icon>
            </span>
            <span style="--i:5;--x:-1;--y:-1;">6
                <ion-icon name="moon-outline"></ion-icon>
            </span>
            <span style="--i:6;--x:1;--y:-1;">7
                <ion-icon name="water-outline"></ion-icon>
            </span>
            <span style="--i:7;--x:1;--y:1;">8
                <ion-icon name="time-outline"></ion-icon>
            </span>
        </div>
        <div class="close">9
            <ion-icon name="close-outline"></ion-icon>
        </div>
    </div>
</body>
<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script><script  src="./script.js"></script>
<script>
    let frem = document.querySelector('.frem');
    frem.onclick = function () {
        frem.classList.toggle('active')
    }
</script>
</html>