<html>
<head>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/vendor/jquery-ui/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="../../assets/css/crono.css">
</head>
<body>
<div class="row">
    <div id="wrapper" class="offset-md-3 col-md-6">
        <div class="content">
            <div class="margin_movil">
                <div>
                    <meta name="viewport"
                          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0">
                    <div id="box" class="row">
                        <div class="row" style="width: 100%">
                            <img src="../../assets/img/logos/aproraLetrasVerdesTransparente.png" class="img-fluid img center" id="logo">
                        </div>
                        <div class="row">
                            <div id="selector-cronometro">
                                <span id="btn-exposicion" class="btn btn-active col-md-3">Exposición</span>
                                <span id="btn-refutacion" class="btn col-md-3">Refutación 1</span>
                                <span id="btn-refutacion2" class="btn col-md-3">Refutación 2</span>
                                <span id="btn-conclusion" class="btn col-md-3">Conclusión</span>
                            </div>
                        </div>
                        <div class="row" style="width: 100%">
                            <div id="cronometros" class="col-md-12">
                                <span style="display: block;" id="cronometro-exposicion"
                                      class="cronometro">00:03:00</span>
                                <span style="display: none;" id="cronometro-refutacion"
                                      class="cronometro">00:04:00</span>
                                <span style="display: none;" id="cronometro-refutacion2"
                                      class="cronometro">00:04:00</span>
                                <span style="display: none;" id="cronometro-conclusion"
                                      class="cronometro">00:03:00</span>
                            </div>
                        </div>
                        <div class="row">
                            <div id="controlador">
                                <button id="cronometro-pausa" class="btn col-md-6">Continuar</button>
                                <button id="cronometro-reset" class="btn col-md-6">Resetear contador</button>
                            </div>
                        </div>
                    </div>
                </div>
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
            active_timer = timers.get(0);
            pauseBtn(active_timer);
        });
        //Boton de refutacion
        $("#btn-refutacion").click(function () {
            $(".btn").removeClass("btn-active");
            $("#btn-refutacion").addClass("btn-active");
            $(".cronometro").hide();
            $("#cronometro-refutacion").show();
            active_timer = timers.get(1);
            pauseBtn(active_timer);
        });
        //Boton de refutacion
        $("#btn-refutacion2").click(function () {
            $(".btn").removeClass("btn-active");
            $("#btn-refutacion2").addClass("btn-active");
            $(".cronometro").hide();
            $("#cronometro-refutacion2").show();
            active_timer = timers.get(2);
            pauseBtn(active_timer);
        });
        //Boton de conclusion
        $("#btn-conclusion").click(function () {
            $(".btn").removeClass("btn-active");
            $("#btn-conclusion").addClass("btn-active");
            $(".cronometro").hide();
            $("#cronometro-conclusion").show();
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
            switch (timer.type) {
                case 'exposicion':
                    timer.time = 180;
                    break;
                case 'refutacion':
                    timer.time = 240;
                    break;
                case 'refutacion2':
                    timer.time = 240;
                    break;
                case 'conclusion':
                    timer.time = 180;
                    break;
            }
            timer.isRunning = false; //pausar o continuar la cuenta
            timer.reverseClock = false; //invertir la cuenta
            $("#cronometro-pausa").html("Continuar");
            timeToMinSec(timer);
            paintTimer(timer);
        }

        function parpadeo(item) {
            $(item).animate({opacity: 0.25}, 150).delay(150).animate({opacity: 1}, 150);
        }

        function pauseBtn(timer) {
            if (!timer.isRunning) {
                $("#cronometro-pausa").html("Continuar");
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




