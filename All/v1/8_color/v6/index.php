<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 22 - Calculadora Javascript</title>
    <link href="style.css" rel="stylesheet"/>
</head>

<body>
    <div class="calculadora">
        <div class="painel" >
            <div class="operacao" ></div>
            <div class="resultado"></div>
            <button id="resultado"  name="resultado">0</button>
        </div>
        
        <div class="botoes">
            <button class="botao" id="apagar" onclick="limpar(0)">CE</button>
            <button class="botao" id="apagar" onclick="apagarUltimo()">&#8592;</button>
            <button class="botao" id="porcentagem" onclick="porcentagem()">%</button>
            <button class="botao" id="soma" onclick="verificarSinal('+')">+</button>
            <button class="botao" id="sete" onclick="pegarNumero(7)">7</button>
            <button class="botao" id="oito" onclick="pegarNumero(8)">8</button>
            <button class="botao" id="nove" onclick="pegarNumero(9)">9</button>
            <button class="botao" id="subtrair" onclick="verificarSinal('-')">-</button>
            <button class="botao" id="quatro" onclick="pegarNumero(4)">4</button>
            <button class="botao" id="cinco" onclick="pegarNumero(5)">5</button>
            <button class="botao" id="seis" onclick="pegarNumero(6)">6</button>
            <button class="botao" id="multiplicar" onclick="verificarSinal('x')">X</button>
            <button class="botao" id="um" onclick="pegarNumero(1)">1</button>
            <button class="botao" id="dois" onclick="pegarNumero(2)">2</button>
            <button class="botao" id="3" onclick="pegarNumero(3)">3</button>
            <button class="botao" id="dividir" onclick="verificarSinal('/')">&#247;</button>
            <button class="botao" id="0" onclick="pegarNumero(0)">0</button>
            <button class="botao" id="mais/menos" onclick="mudarSinal()">&#177;</button>
            <button class="botao" id="virgula" onclick="colocarPonto()">.</button>
            <button class="botao" id="igual" onclick="darResultado()">=</button>
        </div>
    </div>
    <select name="tema" id="tema" >
        <option value="tema-padrao">Selecione um tema</option>
        <option value="tema-1">Tema 1</option>
        <option value="tema-2">Tema 2</option>
        <option value="tema-3">Tema 3</option>
        <option value="tema-4">Tema 4</option>
        <option value="tema-5">Tema 5</option>
    </select>
</body>

<script src="script.js" ></script>

</html>