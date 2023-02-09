<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Definir Jogadores</title>
</head>

<body>
    <div class="div">
        <div class="retangulo">
            <div id="jogador1">
                <label for="idJogador">Jogador 1</label>
                <select class="dados" name="idJogador" id="idJogador">
                    <?php
                    require_once './dao/DAOJogador.php';
                    require_once './dao/Conexao.php';

                    $dao = new DAOJogador();
                    $lista = $dao->lista();

                    if ($lista) {
                        foreach ($lista as $l) {
                            echo '<option value="' . $l['idJogador'] . '">' . $l['nome'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>

            <div id="jogador2">
                <label for="idJogador">Jogador 2</label>
                <select class="dados" name="idJogador" id="idJogador">
                    <?php
                    require_once './dao/DAOJogador.php';
                    require_once './dao/Conexao.php';

                    $dao = new DAOJogador();
                    $lista = $dao->lista();

                    if ($lista) {
                        foreach ($lista as $l) {
                            echo '<option value="' . $l['idJogador'] . '">' . $l['nome'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="botoes">
                <form action="./tabuleiro.php">
                    <button> Jogar </button>
                </form>

                <form action="./index.php">
                    <button> Início </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>