<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>

    @include('header')

    <main>
        <div class="banner">
            <div class="banner-content">
                <div class="wrapp">
                    <div class="banner-name">
                        Emmanuel Santoyo Chagolla
                    </div>
                    <div class="banner-text">
                        Front-end Developer
                    </div>
                </div>
            </div>
            <div class="wallpaper">
                <img src="img/fondo.jpg" alt="">
            </div>
        </div>
        <div id="skills" class="container-skills">
            <div class="title">
                Habilidades
            </div>
            <div class="container-icons-skills">
                <div class="skill">
                    <div class="skill-icon">
                        <img src="img/html.png" alt="html">
                    </div>
                    <div class="skill-txt">
                        HTML
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-icon">
                        <img src="img/css.png" alt="css">
                    </div>
                    <div class="skill-txt">
                        CSS
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-icon">
                        <img src="svg/LOGO_PORTAFOLIO.svg" alt="css">
                    </div>
                    <div class="skill-txt">
                        JS
                    </div>
                </div>
            </div>
        </div>

        <div id="works" class="container-works">
            <div class="title">
                Trabajos
            </div>
            <div class="container-info">
                <div class="even info-punto">
                    <div class="subtitle">
                        PUNTO DE VENTA
                    </div>
                    <div class="information">
                        Desarrollo de un punto de venta para una empresa de servicios de limpieza. Con el que se logra administrar todos los recursos como escobas, limpiadores, esponjas, trapos etc. Tambien informa sobre los gastos que genera y el beneficio que aporta.
                    </div>
                </div>
                <div class="odd info-calculadora">
                    <div class="subtitle">
                        CALCULADORA
                    </div>
                    <div class="information">
                        Elaboración de una calculadora que realice operaciones matemáticas, con el fin de que el usuario pueda realizar operaciones de manera sencilla.
                    </div>
                </div>
                <div class="even info-banco">
                    <div class="subtitle">
                        SISTEMA BANCARIO
                    </div>
                    <div class="information">
                        Se entrego un sistema bancario que calcula entre otras cosas, el saldo de una cuenta bancaria, el interes al abrir una cuenta, transacciones realizadas entre cuentas, etc.
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('footer')

</body>

</html>