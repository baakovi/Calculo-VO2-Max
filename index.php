<?php

    if (empty($_POST['age']) && empty($_POST['gender']) && empty($_POST['meters'])) {
        $result = "Resultado aqui!";
    }

    if (isset($_POST['submit']) && !empty($_POST['age']) && !empty($_POST['gender']) && !empty($_POST['meters'])) {
        $name = $_POST['gender'];
        $meters = $_POST['meters'];
        $result = $_POST['result'];
    
        $calc = ($meters - 504.1) / 44.9;
    
        $result = number_format($calc, 2);
        $resultInput = "";

        // if ($result > 2 && $result < 5) {
        //     $resultInput = "Péssimo";
        // }
        // if ($result > 5 && $name === "fem") {
        //     $resultInput = "Bom mulher";
        // }
        // if ($result > 5 && $name === "masc") {
        //     $resultInput = "Bom homem";
        // }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./styles/style.css">
    <title>Cálculo VO2 Máximo</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo_ecliente.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/cac5e94aa0.js" crossorigin="anonymous"></script>

    <script>
        function reloadPage(){
            window.location.assign('index.php');
        } 
    </script>
</head>

<body class="wrapper"> 
    <header id="header">
        <div class="social-bar">
            <div class="container">
                <div class="info">
                    <div class="info-contact">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:contato@ecliente.com.br">contato@ecliente.com.br</a>
                    </div>
                    <div class="info-contact">
                        <i class="fas fa-phone"></i>                    
                        <p>(19) 3371-2086</p>
                    </div>
                </div>
                    <div class="social">
                        <a href="https://www.facebook.com/ecliente" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/ecliente/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/user/ecliente?sub_confirmation=1" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
            </div>
        </div>
        <div class="container">
            <a href="./index.html" class="logoecliente">
                <img src="assets/img/logo_ecliente-full.png" alt="Logo ePanel">
            </a>
    
            <a href="#" class="logomenu" onclick="abrirMenu()">
                <img src="assets/svg/hamburger-svgrepo-com.svg" alt="Ícone do menu">
            </a>
            <nav class="menu" id="btnMenu">
                <a href="#" onclick="fecharMenu()">&times; Fechar</a>
                <a href="index.html">
                    <i class="fa-solid fa-qrcode"></i>Gerador de QR Code
                </a>
                <a href="https://ecliente5.com.br/gerador-qr-code/index.html" target="_blank">
                    <i class="fa-solid fa-lock"></i> Gerador de Senhas
                </a>
                <a href="https://ecliente.com.br/gerador/" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>Gerador de WhatsApp
                </a>
            </nav>
            
        </div>
    </header>
    
    <main>
        <section class="headline">
            <h1>
                Cálculo VO2 Máximo
            </h1>

            <p class="subtitulo">
                Instruções
            </p>

            <p class="sub-subtitulo">
                <b>1° -</b> Corra de forma intensa durante 12 minutos.
                <br>
                <b>2° -</b> Realize essa corrida em um trecho que você consiga marcar a distância.
                <br>
                <b>3° -</b> Após a corrida, digite a distância percorrida (em metros) no campo abaixo.
                <br>
                <b>4° -</b> Exemplo: <i>Se você correu 2,5km você deve digitar 2500.</i>
                <br>
                <b>5° -</b> Após apertar o botão "Enviar", vamos indicar qual o treino ideal para você estar realizando de acordo com seu resultado.
                <br>
                <b>6° -</b> Se desejar, refaça este teste para avaliar se você deve mudar o treino.
            </p>
        </section>

        <section class="card-body">

            <div class="container-top">
                <div class="setorresult">
                    <div class="result">
                        <p class="result-input"><?= $resultInput; ?></p>

                        <input 
                        class="form-control"
                        id="displayresult"
                        placeholder="<?= $result ?>"
                        name="result"
                        autocomplete="off"
                        readonly>
                    </div>
                </div>
    
                <div class="button-refresh">
                    <div class="refresh">
                        <button class="button-click" onclick="reloadPage()">Recarregar</button>
                    </div>
                </div>
            </div>

            <form action="" method="POST" class="header-form">    

                <div class="instructions">
                    <div class="age">
                        <label for="age" class="input-text">Digite sua idade:</label>
                        <input type="number" min="12" max="100" name="age" placeholder="" required>
                    </div>

                    <div class="sex">
                        <label for="sex" class="input-text">Digite seu gênero:</label>
                        <select name="gender" id="gender" required>
                            <option value=""></option>
                            <option value="fem">Feminino</option>
                            <option value="masc">Masculino</option>
                        </select>
                    </div>

                    <div class="meters">
                        <label for="meters" class="input-text">Digite a quantidade de metros percorridos</label>
                        <input type="number" name="meters" placeholder="" required>
                    </div>
                </div>

                <div class="button-instruction">
                    <button type="submit" name="submit" class="novo">
                        Enviar
                    </button>
                </div>

            </form>

        </section>
    </main>
        <script src="./scripts/script.js"></script>             
</body>
</html>