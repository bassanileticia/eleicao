<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presidente</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    session_start();

    if (isset($_POST["voto"])) {
        $voto = $_POST["voto"];

        if (
            $voto == "13" ||
            $voto == "22" ||
            $voto == "14" ||
            $voto == "70"
        ) {
            $_SESSION["presidente"] = $voto;

            header("Location: comprovante.php");
            exit;
        }
    }

    ?>

    <div class="container">

        <h1>Presidente da República</h1>

        <p>Digite o número do candidato:</p>

        <form method="POST">

            <input
                type="text"
                name="voto"
                maxlength="2"
                minlength="2"
                pattern="[0-9]{2}"
                placeholder="Digite 2 números"
                required>

            <button type="submit">CONFIRMAR</button>

        </form>

        <div class="informacoes">

            <h2>Candidatos</h2>

            <p><strong>13</strong> - Lula (PT)</p>

            <p><strong>22</strong> - Flávio Bolsonaro (PL)</p>

            <p><strong>14</strong> - Renan Santos (MISSÃO)</p>

            <p><strong>70</strong> - Augusto Cury (AVANTE)</p>

        </div>

    </div>

</body>

</html>