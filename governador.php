<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Governador</title>
</head>
<body>

<?php
session_start();

if (isset($_POST["voto"])) {
    $voto = $_POST["voto"];

    if (
        $voto == "10" ||
        $voto == "13" ||
        $voto == "16" ||
        $voto == "21"
    ) {
        $_SESSION["governador"] = $voto;

        header("Location: presidente.php");
        exit;
    }
}
?>

    <div class="container">

        <h1>Governador</h1>

        <p>Digite o número do candidato:</p>

        <form method="POST">

            <input
                type="text"
                name="voto"
                maxlength="2"
                minlength="2"
                pattern="[0-9]{2}"
                placeholder="Digite 2 números"
                required
            >

            <button type="submit">CONFIRMAR</button>

        </form>

        <div class="informacoes">

            <h2>Candidatos</h2>

            <p><strong>10</strong> - Tarcísio (REPUBLICANOS)</p>

            <p><strong>13</strong> - Fernando Haddad (PT)</p>

            <p><strong>16</strong> - Vera Lúcia (PSTU)</p>

            <p><strong>21</strong> - Carlos Machado (PCB)</p>

        </div>

    </div>

</body>
</html>