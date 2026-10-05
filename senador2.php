<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2º Senador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
session_start();

if (isset($_POST["voto"])) {
    $voto = $_POST["voto"];

    if (
        ($voto == "222" ||
        $voto == "111" ||
        $voto == "400" ||
        $voto == "360")
        &&
        $voto != $_SESSION["senador1"]
    ) {
        $_SESSION["senador2"] = $voto;

        header("Location: governador.php");
        exit;
    }
}
?>

    <div class="container">

        <h1>2º Senador</h1>

        <p>Digite o número do candidato:</p>

        <form method="POST">

            <input
                type="text"
                name="voto"
                maxlength="3"
                minlength="3"
                pattern="[0-9]{3}"
                placeholder="Digite 3 números"
                required
            >

            <button type="submit">CONFIRMAR</button>

        </form>

        <div class="informacoes">

            <h2>Candidatos</h2>

            <p><strong>222</strong> - André do Prado (PL)</p>

            <p><strong>111</strong> - Guilherme Derrite (PP)</p>

            <p><strong>400</strong> - Simone Tebet (PSB)</p>

            <p><strong>360</strong> - William Teixeira (AGIR)</p>

        </div>

    </div>

</body>
</html>