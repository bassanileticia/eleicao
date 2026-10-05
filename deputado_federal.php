<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deputado Federal</title>
</head>
<body>
    
<?php
session_start();

if (isset($_POST["voto"])) {
    $voto = $_POST["voto"];

    if ($voto == "2211" || $voto == "5070" || $voto == "1414" || $voto == "4040") {
        $_SESSION["deputado_federal"] = $voto;

        header("Location: deputado_estadual.php");
        exit;
    }
}
?>

    <div class="container">

        <h1>Deputado Federal</h1>

        <p>Digite o número do candidato:</p>

        <form method="POST">

            <input
                type="text"
                name="voto"
                maxlength="4"
                minlength="4"
                pattern="[0-9]{4}"
                placeholder="Digite 4 números"
                required
            >

            <button type="submit">CONFIRMAR</button>

        </form>

        <div class="informacoes">
            <h2>Candidatos</h2>

            <p><strong>2211</strong> - Lucas Pavanato (PL)</p>
            <p><strong>5070</strong> - Erika Hilton (PSOL)</p>
            <p><strong>1414</strong> - Kim Kataguiri (MISSÃO)</p>
            <p><strong>4040</strong> - Tabata Amaral (PSB)</p>
        </div>

    </div>

</body>
</html>