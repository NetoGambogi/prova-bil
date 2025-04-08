<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento ETech - 2026</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<header>
        <nav>
            <div class="logo">
                <img src="img/logo.png">
                <a href="#">ETech 2026</a>
            </div>
            <ul>
            <li><a href="#evento">Evento</a></li>
            <li><a href="#palestras">Sobre as Palestras</a></li>
            </ul>
            <button>Contato</button>
            <button id="menuButton" onclick="openMenu()">
                <i class='bx bx-menu'></i>
            </button>
        </nav>
</header>

<main>
        <div class="main" id="evento">
            <div class="left">
            <h5>Etech</h5>
            <h3>A maior feira de tecnologia do mundo!</h3>
                <p>A ETech 2026 é a maior feira de tecnologia do ano, reunindo inovação, criatividade e sustentabilidade em um só lugar. Com foco em tendências emergentes como robótica, inteligência artificial, mobilidade inteligente e tecnologias verdes, o evento proporciona uma experiência única para entusiastas, profissionais e empresas do setor. Além de estandes interativos, o público poderá acompanhar palestras com especialistas renomados, demonstrações ao vivo de carros voadores, robôs autônomos e soluções tecnológicas que prometem transformar o futuro. A ETech 2026 é o ponto de encontro entre a tecnologia e o amanhã.</p>
        </div>
        <div class="right">
            <img src="img/imagem-sobre1.png" alt="Foto do nosso evento">
        </div>
        </div>
</main>

<article>
    
    <div class="titulopalestra" id="palestras">
        <h3>Programação das nossas palestras!</h3>
    </div>

<?php

$palestras = [
    1 => [
        "Titulo" => "Carros voadores e a nova era - 12/06/26 (13:00)",
        "Descrição" => "Na ETech 2026, será demonstrado ao vivo um carro voador de última geração, com propulsão elétrica e inteligência artificial. Projetado para revolucionar o transporte urbano, o veículo oferece voos curtos, seguros e sustentáveis. Especialistas apresentarão os avanços técnicos, desafios e perspectivas de uso em larga escala até o fim da década.",
        "Palestrantes" => [
            ["nome" => "Jorge", "confirmado" => true],
            ["nome" => "Pedro", "confirmado" => false],
            ["nome" => "Andre", "confirmado" => true],
        ]
    ],
    2 => [
        "Titulo" => "Robô Doméstico Inteligente - 12/06/26 (14:00)",
        "Descrição" => "Na ETech 2026, será apresentado um robô doméstico multifuncional que realiza tarefas do dia a dia com autonomia e precisão. Com sensores inteligentes, reconhecimento de voz, visão computacional e integração com assistentes virtuais, ele pode limpar, cozinhar, organizar a casa e cuidar de pets, operando por comandos simples ou automaticamente.",
        "Palestrantes" => [
            ["nome" => "Mateus", "confirmado" => true],
            ["nome" => "João", "confirmado" => false],
            ["nome" => "Carlos", "confirmado" => false],
        ]
    ],
    3 => [
        "Titulo" => "Carro 100% Elétrico com Energia Solar - 12/06/26 (15:00)",
        "Descrição" => "Na ETech 2026, será lançado um carro elétrico inovador com painéis solares integrados, focado em sustentabilidade e eficiência. O veículo promete zero emissões, maior autonomia com luz natural e independência energética, sendo ideal para uso urbano e viagens de média distância. Especialistas apresentarão seu sistema de captação solar e principais diferenciais.",
        "Palestrantes" => [
            ["nome" => "Felipe", "confirmado" => true],
            ["nome" => "Antonio", "confirmado" => true],
            ["nome" => "Luiz", "confirmado" => false],
        ]
    ]
];

echo '<div class="palestras">';
echo '<div class="conjunto-card">';

for ($i = 1; $i <= 3; $i++) {
    echo '<section class="card">';
        echo '<h4>' . $palestras[$i]["Titulo"] . '</h4>';
        echo '<p>' . $palestras[$i]["Descrição"] . '</p>';
        echo '<div class="palestrantes">';
            echo '<strong>Palestrantes confirmados:</strong>';
            echo '<ul>';
            foreach ($palestras[$i]["Palestrantes"] as $palestrante) {
                echo '<li>' . $palestrante["nome"];
                if (!$palestrante["confirmado"]) {
                    echo ' - Em breve!';
                }
                echo '</li>';
            }
            echo '</ul>';
        echo '</div>';
    echo '</section>';
}

echo '</div>';
echo '</div>';
?>
    <div class="imgevento">
    <img src="img/imgevento.jpg">
    </div>

</article>


    <footer>
        <div class="topo">
            <div class="logo">
                <img src="img/logo.png">
                <a href="#">ETech 2026</a>

            </div>
            <ul>
                <li><a href="#evento">Evento</a></li>
                <li><a href="#palestras">Palestras</a></li>
            </ul>
            <div class="contato">
                <a href=""><i class='bx bxl-facebook'></i></a>
                <a href=""><i class='bx bxl-instagram'></i></a>
                <a href=""><i class='bx bxl-twitter'></i></a>
            </div>
        </div>
        <div class="separador"></div>
        <div class="informacoes">
            <p>
                CComp Unis - Todos os direitos reservados.
            </p>
            <div class="links">
                <a href="#">Política de privacidade</a>
                <a href="#">Cookies</a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>