<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    
    <style>
        h1{
            padding-top: 0.5em;
            text-align: center;
        }

        .contenedor {
            display: flex;
        }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>

    <h1 class="text">Los mejores juegos de la semana</h1>
        
    <!--JUEGOS DE LA SEMANA-->
    <div class="contenedor juegos_semana">

    <div class="card" style="width: 18rem;">
        <img src="img/gta.jpg" class="card-img-top" alt="GTA V">
    <div class="card-body">
        <h5 class="card-title">Grand Theft Auto V</h5>
        <p class="card-text">Grand Theft Auto V es un videojuego de acción-aventura de mundo abierto desarrollado por el estudio Rockstar North y distribuido por Rockstar Games.</p>
        <a href="https://www.rockstargames.com/mx/gta-v" target="_BLANK">Comprar aqui</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="img/cod.jpg" class="card-img-top" alt="GTA V">
    <div class="card-body">
        <h5 class="card-title">Call of Duty: Modern Warfare 2</h5>
        <p class="card-text">Call of Duty: Modern Warfare II es un videojuego de disparos en primera persona desarrollado por Infinity Ward y publicado por Activision</p>
        <a href="https://www.callofduty.com/es/modernwarfare2" target="_BLANK">Comprar aqui</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="img/minecraft.jpg" class="card-img-top" alt="GTA V">
    <div class="card-body">
        <h5 class="card-title">Minecraft</h5>
        <p class="card-text">Minecraft es un videojuego de construcción de tipo «mundo abierto» o sandbox creado originalmente por el sueco Markus Persson, ​ y posteriormente desarrollado por Mojang Studios.​</p>
        <a href="https://www.minecraft.net/es-es" target="_BLANK">Comprar aqui</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="img/forza.jpg" class="card-img-top" alt="GTA V">
    <div class="card-body">
        <h5 class="card-title">Forza Horizon 5</h5>
        <p class="card-text">Forza Horizon 5 es un videojuego de carreras multijugador en línea desarrollado por Playground Games y publicado por Xbox Game Studios.​</p>
        <a href="https://www.xbox.com/es-mx/games/forza-horizon-5?&ef_id=EAIaIQobChMI9ojhsdaL-wIVPxPUAR2e0Q3BEAAYASAAEgJQFPD_BwE:G:s&OCID=AIDcmm3jadyopc_SEM_EAIaIQobChMI9ojhsdaL-wIVPxPUAR2e0Q3BEAAYASAAEgJQFPD_BwE:G:s&gclid=EAIaIQobChMI9ojhsdaL-wIVPxPUAR2e0Q3BEAAYASAAEgJQFPD_BwE" target="_BLANK">Comprar aqui</a>
    </div>
    </div>
    
    <div class="card" style="width: 18rem;">
        <img src="img/valorant.jpg" class="card-img-top" alt="GTA V">
    <div class="card-body">
        <h5 class="card-title">Valorant</h5>
        <p class="card-text">Valorant es un hero shooter en primera persona multijugador gratuito desarrollado y publicado por Riot Games.​</p>
        <a href="https://playvalorant.com/es-mx/?gclid=EAIaIQobChMIsq2bxdeL-wIVuxXUAR2lHQiiEAAYASAAEgKwlfD_BwE&gclsrc=aw.ds" target="_BLANK">Comprar aqui</a>
    </div>
    </div>
    </div>  
    <!--JUEGOS MÁS ESPERADOS-->

    <h1>Juegos más esperados</h1>

    <div class="contenedor juegosmasesperados">

    <div class="card" style="width: 18rem;">
        <img src="img/gta6.jpg" class="card-img-top" alt="GTA VI">
    <div class="card-body">
        <h5 class="card-title">Grand Theft Auto VI</h5>
        <p class="card-text">Rockstar Games está desarrollando un proximo videojuego de la serie Grand Theft Auto, ​ que será la octava entrega principal de dicha serie, tras Grand Theft Auto V de 2013, y la decimosexta en total. ​</p>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="img/godofwar.jpg" class="card-img-top" alt="God of War: Ragnarök">
    <div class="card-body">
        <h5 class="card-title">God of War: Ragnarök</h5>
        <p class="card-text">God of War: Ragnarök es un próximo juego de acción y aventuras en desarrollo por Santa Monica Studio y que será publicado por Sony Interactive Entertainment​</p>
    </div>

    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>