<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de votação</title>
</head>
<body>
    <?php 
    session_start(); $_SESSION = array(); 
    ?>

<header>
    <div class="topo">
        <h1>Portal de Votação</h1>
        <p>Eleições 2026</p>
    </div>
</header>

<div class="container">

    <section class="boas-vindas">
        <h2>Bem-vindo!</h2>

        <p>
            O voto é uma importante forma de participação na democracia.
            Antes de fazer sua escolha, procure conhecer as candidaturas
            e suas propostas.
        </p>

        <p>
            Vote com consciência e responsabilidade. Confira o número,
            o nome e o partido apresentados antes de confirmar cada voto.
        </p>
    </section>


    <section>
        <h2>Como votar?</h2>

        <div class="passos">

            <div class="passo">
                <h3>1. Informe-se</h3>
                <p>
                    Conheça as candidaturas e procure informações
                    em fontes confiáveis.
                </p>
            </div>

            <div class="passo">
                <h3>2. Escolha</h3>
                <p>
                    Escolha de forma livre e independente,
                    de acordo com sua própria decisão.
                </p>
            </div>

            <div class="passo">
                <h3>3. Confira</h3>
                <p>
                    Antes de confirmar, confira o número,
                    o nome e o partido da candidatura.
                </p>
            </div>

        </div>
    </section>


    <section>
        <h2>Ordem da votação</h2>

        <div class="ordem">

            <p><strong>1.</strong> Deputado Federal — 4 dígitos</p>
            <p><strong>2.</strong> Deputado Estadual — 5 dígitos</p>
            <p><strong>3.</strong> 1º Senador — 3 dígitos</p>
            <p><strong>4.</strong> 2º Senador — 3 dígitos</p>
            <p><strong>5.</strong> Governador — 2 dígitos</p>
            <p><strong>6.</strong> Presidente — 2 dígitos</p>

        </div>
    </section>


    <section class="atencao">

        <h2>Antes de começar</h2>

        <p>
            Leia atentamente as informações de cada candidatura.
            Durante a votação, confira sua escolha antes de confirmar.
        </p>

    </section>


    <div class="comecar">
        <a href="deputado_federal.php" class="botao">
            Iniciar votação
        </a>
    </div>

</div>

<footer>
    <p>Portal de Votação • Eleições 2026</p>
</footer>

</body>
</html>