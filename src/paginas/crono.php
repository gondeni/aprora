<html>
<head>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/vendor/jquery-ui/themes/base/jquery-ui.min.css">
</head>
<style>
    /* CSS Document */
    #box {
        /*float: left;*/
        margin-top: 50px;
        width: 100%;
        /*width: 800px;*/
        margin-left: auto;
        margin-right: auto;
        display: block;
        /*border: 1px solid #212121;*/

    }

    #volver{
        color: #00AB39;
        font-size:20px ;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    #logo {
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    .aprora_letras {
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    .aprora_letras a {
        width: 60px;
        padding: 10px;

    }

    .aprora_letras p {
        padding: 15px;
        text-align: left;
        font-size: 1em;
        /*text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;*/
    }

    #selector-cronometro {
        /*float: left;*/
        /*text-align: center;*/
        margin-left: auto;
        margin-right: auto;
        /*margin-bottom: 10px;*/
    }

    #cronometros {
        /*float: left;*/
        /*margin-top: 10px;*/
        margin-left: auto;
        margin-right: auto;
        display: block;
        text-align: center;
    }

    #controlador {
        margin-top: 10px;
        margin-left: auto;
        margin-right: auto;
        /*display:block;*/
        float: left;

    }

    #cronometro-pausa {
        background: #212121;
        color: white;
        padding: 15px;
        /*width: 300px;*/
        float: left;
        border: none;
        display: block;
        /*font-family: 'Maven Pro', sans-serif;*/
        font-size: 15px;
        border: 1px solid #212121;
    }

    #cronometro-reset {
        background: #212121;
        color: white;
        padding: 15px;
        border-radius: 5px;
        border: none;
        font-size: 15px;
        border: 1px solid #212121;
    }

    #cronometro-tiempo {
        background: white;
        color: #9b9b9b;
        padding: 15px;
        max-width: 100px;
        border-radius: 5px;
        /*font-family: 'Maven Pro', sans-serif;*/
        font-size: 15px;
        border: 1px solid #212121;
    }

    #cronometro-pausa:hover, #cronometro-reset:hover {
        background: #575757;
        color: #bcbcbc;
        border: 1px solid #7a7a7a;
        color: #00AB39;
    }

    /*#cronometro-pausa {*/
    /*    margin: 0;*/
    /*}*/

    /*#cronometro-reset {*/
    /*    margin-left: 10px;*/
    /*}*/

    .cronometro {
        /*border: 4px solid #CCCCCC;*/
        color: black;
        /*float: left;*/
        /*font-size: 16px;*/
        text-align: center;
        font-size: 15vw;
        font-weight: normal;
        margin-left: -15%;
        /*padding: 10px;*/
        /*max-width: 698px;*/
        /*width: 100%;*/
    }

    .cronometro.alert {
        color: #cc0022;
    }

    .btn {
        background: #212121;
        color: white;
        float: left;
        font-weight: normal;
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #212121;
    }

    #btn-conclusion {
        margin: 0;
    }

    .btn:hover {
        background: #575757;
        color: #bcbcbc;
        /*float: left;*/
        width: 100%;
        font-weight: normal;
        /*margin-right: 10px;*/
        padding: 10px;
        font-size: 15px;
        border: 1px solid #7a7a7a;
    }

    .btn.btn-active {
        background: #00AB39;
        color: white;
        width: 100%;
        border: 1px solid #00AB39;
        /*float: left;*/
        font-weight: normal;
        /*margin-right: 10px;*/
        /*padding: 7px 0;*/
        padding: 10px;
        font-size: 15px;
    }

    #cronometro-pausa:hover, #cronometro-reset:hover, .btn:hover {
        cursor: pointer;
    }
</style>
<body>
<div id="wrapper" class="offset-md-3 col-md-6">
    <div class="content">
        <div class="margin_movil">

            <meta name="viewport"
                  content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0">
            <div class="row" id="box">
                <div class="col">
                    <div class="row">
                        <div class="row" style="margin-bottom: 30px">
                            <div class="col-sm-6 offset-3" id="logo">
                                <img src="../../assets/img/logos/aproraLetrasVerdesTransparente.png"
                                     class="img-fluid img center" id="logo" style="width: 80%">
                            </div>
                        </div>
                        <div class="row" id="selector-cronometro">
                            <div class="col-3">
                                <span id="btn-exposicion" class="btn btn-active">Exposición</span>
                            </div>
                            <div class="col-3">
                                <span id="btn-refutacion" class="btn">Refutación 1</span>
                            </div>
                            <div class="col-3">
                                <span id="btn-refutacion2" class="btn">Refutación 2</span>
                            </div>
                            <div class="col-3">
                                <span id="btn-conclusion" class="btn">Conclusión</span>
                            </div>
                        </div>
                        <div class="row" id="cronometros">
                            <div class="col">
                                <span style="display: block;" id="cronometro-exposicion"
                                      class="cronometro activo">00:03:00</span>
                            </div>

                            <div class="col">
                                <span style="display: none;" id="cronometro-refutacion"
                                      class="cronometro">00:04:00</span>
                            </div>
                            <div class="col">
                                <span style="display: none;" id="cronometro-refutacion2"
                                      class="cronometro">00:04:00</span>
                            </div>

                            <div class="col">
                                <span style="display: none;" id="cronometro-conclusion"
                                      class="cronometro">00:03:00</span>
                            </div>
                        </div>
                        <div class="row" id="controlador" style="margin-bottom:50px">
                            <div class="col-4">
                                <button class="btn" id="cronometro-pausa">Iniciar</button>
                            </div>
                            <div class="col-5">
                                <button id="cronometro-reset">Resetear (s)</button>
                            </div>
                            <div class="col-2">
                                <input type="text" id="cronometro-tiempo" placeholder="segundos" value="180">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="../../index.html" id="volver">Volver</a>
            </div>
        </div>
    </div>
</div>
<script src="../../assets/vendor/jquery/jquery.min.js"></script>
<script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

<script>

    //------------------------------------
    //	PARA CAMBIAR DE CONTADOR CAMBIAR LA VARIABLE active_timer
    //------------------------------------
    $(document).ready(function () {
        //Selector del cronometro
        var timers = $(".cronometro");
        var active_timer = timers.get(0);
        //Inicializar contadores
        timers.get(0).time = 180; //exposicion
        timers.get(0).type = "exposicion";
        timers.get(1).time = 240; //refutacion
        timers.get(1).type = "refutacion";
        timers.get(2).time = 240; //refutacion
        timers.get(2).type = "refutacion2";
        timers.get(3).time = 180; //conclusion
        timers.get(3).type = "conclusion";

        timers.each(function (index, timer) { //timer es el cronometro
            startTimer(timer);
        });
        //Boton de pausa
        $("#cronometro-pausa").click(function () {
            if (active_timer.isRunning) {
                active_timer.isRunning = false;
            } else {
                active_timer.isRunning = true;
            }
            pauseBtn(active_timer);
        });
        //Boton de reset
        $("#cronometro-reset").click(function () {
            initTimer(active_timer);
        });
        //Boton de exposicion
        $("#btn-exposicion").click(function () {
            $(".btn").removeClass("btn-active");
            $("#btn-exposicion").addClass("btn-active");
            $(".cronometro").hide();
            $("#cronometro-exposicion").show();
            $("#cronometro-tiempo").val(180);
            active_timer = timers.get(0);
            pauseBtn(active_timer);
        });
        //Boton de refutacion
        $("#btn-refutacion").click(function () {
            $(".btn").removeClass("btn-active");
            $("#btn-refutacion").addClass("btn-active");
            $(".cronometro").hide();
            $("#cronometro-refutacion").show();
            $("#cronometro-tiempo").val(240);
            active_timer = timers.get(1);
            pauseBtn(active_timer);
        });
        //Boton de refutacion
        $("#btn-refutacion2").click(function () {
            $(".btn").removeClass("btn-active");
            $("#btn-refutacion2").addClass("btn-active");
            $(".cronometro").hide();
            $("#cronometro-refutacion2").show();
            $("#cronometro-tiempo").val(240);
            active_timer = timers.get(2);
            pauseBtn(active_timer);
        });
        //Boton de conclusion
        $("#btn-conclusion").click(function () {
            $(".btn").removeClass("btn-active");
            $("#btn-conclusion").addClass("btn-active");
            $(".cronometro").hide();
            $("#cronometro-conclusion").show();
            $("#cronometro-tiempo").val(180);
            active_timer = timers.get(3);
            pauseBtn(active_timer);
        });

        //FUNCIONES
        function startTimer(timer) {
            timeToMinSec(timer);

            timer.isInitialized = false; //primera carga del crono
            timer.isRunning = false; //pausar o continuar la cuenta
            timer.reverseClock = false; //invertir la cuenta

            if (!timer.isInitialized) {
                paintTimer(timer);
                timer.isInitialized = true;
            }
            setTimeout(function () { //cada segundo
                callTimer(timer);
            }, 1000);
        }

        function timeToMinSec(timer) {
            timer.min = Math.floor(timer.time / 60);
            timer.sec = timer.time % 60;
        }

        function hmsToSecondsOnly(str) {
            var p = str.split(':'),
                s = 0, m = 1;

            while (p.length > 0) {
                s += m * parseInt(p.pop(), 10);
                m *= 60;
            }

            return s;
        }

        function callTimer(timer, min, sec) {
            if (timer.isRunning == true) {

                if (!timer.reverseClock) {
                    timer.sec--;
                    if (timer.min > 0 && timer.sec <= 0) {
                        timer.min--;
                        timer.sec = 59;
                    } else if (timer.sec == 0 && timer.min == 0) {
                        timer.reverseClock = true;
                    }
                    //parpadeo
                    if (timer.min == 0 && timer.sec <= 10 && !timer.reverseClock) parpadeo(timer);
                } else {
                    timer.sec++;
                    if (timer.sec >= 59) {
                        timer.min++;
                        timer.sec = 0;
                    }
                    if (timer.min == 0 && timer.sec <= 10 && timer.reverseClock) parpadeo(timer);
                }

                paintTimer(timer);
            }
            setTimeout(function () {
                callTimer(timer);
            }, 1000);
        }

        function paintTimer(timer) {
            $(timer).html("00:" + (timer.min < 10 ? "0" + timer.min : timer.min) + ":" + (timer.sec < 10 ? "0" + timer.sec : timer.sec));

            if (timer.reverseClock) {
                $("#cronometro-" + timer.type).addClass("alert");
            } else $("#cronometro-" + timer.type).removeClass("alert");
        }

        function initTimer(timer) {
            var valor = $("#cronometro-tiempo").val();
            segundos = (valor.trim()) ? valor : 0;
            switch (timer.type) {
                case 'exposicion':
                    timer.time = parseInt(segundos);
                    break;
                case 'refutacion':
                    timer.time = parseInt(segundos);
                    break;
                case 'refutacion2':
                    timer.time = parseInt(segundos);
                    break;
                case 'conclusion':
                    timer.time = parseInt(segundos);
                    break;
            }
            timer.isRunning = false; //pausar o continuar la cuenta
            timer.reverseClock = false; //invertir la cuenta
            $("#cronometro-pausa").html("Iniciar");
            $("#cronometro-tiempo").val(valor);
            timeToMinSec(timer);
            paintTimer(timer);
        }

        function parpadeo(item) {
            $(item).animate({
                opacity: 0.25
            }, 150).delay(150).animate({
                opacity: 1
            }, 150);
            // $(".cronometro").animate({color: "#cc0022"}, 150).delay(150);
        }

        function pauseBtn(timer) {
            if (!timer.isRunning) {
                $("#cronometro-pausa").html("Iniciar");
            } else {
                $("#cronometro-pausa").html("Pausar");
            }
        }

    });

</script>

</body>
</html>


<?php
//include('../utils/pie.html');
//?>




