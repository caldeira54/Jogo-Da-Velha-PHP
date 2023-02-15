<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <title>Tabuleiro</title>
</head>

<body>
    <div class="div">
        <?php
        session_start();

        $_SESSION["jogador1"] = $_POST["jogador1"];
        $_SESSION["jogador2"] = $_POST["jogador2"];

        ?>

        <div id="jogo">
            <div class="linha">
                <div class="casa" id="casa1"></div>
                <div class="casa" id="casa2"></div>
                <div class="casa" id="casa3"></div>
            </div>
            <div class="linha">
                <div class="casa" id="casa4"></div>
                <div class="casa" id="casa5"></div>
                <div class="casa" id="casa6"></div>
            </div>
            <div class="linha">
                <div class="casa" id="casa7"></div>
                <div class="casa" id="casa8"></div>
                <div class="casa" id="casa9"></div>
            </div>
            <div id="resultado"></div>
        </div>
    </div>

    <div class="botoes">
        <form action="./index.php">
            <button> Início </button>
        </form>

        <form action="./formDefine.php">
            <button> Definir Jogadores </button>
        </form>
    </div>

    <script>
        const jogadores = {
            'jogador1': '<?php echo $_SESSION["jogador1"]; ?>',
            'jogador2': '<?php echo $_SESSION["jogador2"]; ?>'
        }
    </script>

    <script type="text/javascript" src="script.js"></script>
</body>

</html>