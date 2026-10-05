<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante da Votação</title>
</head>
<body>
    <?php
session_start();
?>

    <div class="container">

        <h1>Comprovante de Votação</h1>

        <h2>Seus votos foram computados:</h2>

        <div class="comprovante">

            <p>
                <strong>Deputado Federal:</strong>
                <?php echo $_SESSION["deputado_federal"]; ?>
            </p>

            <p>
                <strong>Deputado Estadual:</strong>
                <?php echo $_SESSION["deputado_estadual"]; ?>
            </p>

            <p>
                <strong>1º Senador:</strong>
                <?php echo $_SESSION["senador1"]; ?>
            </p>

            <p>
                <strong>2º Senador:</strong>
                <?php echo $_SESSION["senador2"]; ?>
            </p>

            <p>
                <strong>Governador:</strong>
                <?php echo $_SESSION["governador"]; ?>
            </p>

            <p>
                <strong>Presidente:</strong>
                <?php echo $_SESSION["presidente"]; ?>
            </p>

        </div>

        <p>Votação finalizada.</p>

    </div>

    <a href="index.php">
    <button type="button">VOLTAR AO INÍCIO</button>
    </a>

</body>
</html>