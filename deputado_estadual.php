<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
session_start();

if (isset($_POST["voto"])) {
    $voto = $_POST["voto"];

    if (
        $voto == "22011" ||
        $voto == "13133" ||
        $voto == "50700" ||
        $voto == "50555"
    ) {
        $_SESSION["deputado_estadual"] = $voto;

        header("Location: senador1.php");
        exit;
    }
}
?>

    <div class="container">

        <h1>Deputado Estadual</h1>

        <p>Digite o número do candidato:</p>

        <form method="POST">

            <input
                type="text"
                name="voto"
                maxlength="5"
                minlength="5"
                pattern="[0-9]{5}"
                placeholder="Digite 5 números"
                required
            >

            <button type="submit">CONFIRMAR</button>

        </form>

        <div class="informacoes">

            <h2>Candidatos</h2>

            <p><strong>22011</strong> - Eduarda Campopiano (PL)</p>

            <p><strong>13133</strong> - Eduardo Suplicy (PT)</p>

            <p><strong>50700</strong> - Sofia Favero (PSOL)</p>

            <p><strong>50555</strong> - Luiza Erundina (PSOL)</p>

        </div>

    </div>

</body>
</html>