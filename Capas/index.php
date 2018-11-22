<?php
?>
<html>
<head>
  <title>HOSPITAL</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="CSS/principal.css">
<link rel="stylesheet" href="CSS/style.css">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#"><span class="primero"><i class="icon icon-home"></i></span>Inicio</a></li>
        <li><a href="#"><span class="segundo"><i class="icon icon-calendar"></i></span>Nueva Cita</a>
        <li><a href="#"><span class="tercero"><i class="icon icon-user-check"></i></span>Citas Pendientes</a>
        <li><a href="#"><span class="cuarto"><i class="icon icon-user-plus"></i></span>Nuevo Registro</a>
          <ul>
            <li><a href="#">Doctor</a></li>
            <li><a href="#">Empleado</a></li>
            <li><a href="#">Paciente</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="quinto"><i class="icon icon-profile"></i></span>Registros</a>
            <ul>
            <li><a href="#">Doctor</a></li>
            <li><a href="#">Empleado</a></li>
            <li><a href="#">Paciente</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="sexto"><i class="icon icon-question"></i></span>Ayuda</a></li>
      </ul>
    </nav>
  </header>
      <div class="wrap">
    <div class="widget">
      <div class="fecha">
        <p id="diaSemana" class="diaSemana"></p>
        <p id="dia" class="dia"></p>
        <p>de </p>
        <p id="mes" class="mes"></p>
        <p>del </p>
        <p id="year" class="year"></p>
      </div>

      <div class="reloj">
        <p id="horas" class="horas"></p>
        <p>:</p>
        <p id="minutos" class="minutos"></p>
        <p>:</p>
        <div class="caja-segundos">
          <p id="ampm" class="ampm"></p>
          <p id="segundos" class="segundos"></p>
        </div>
      </div>
    </div>
  </div>
<script src="JS/relojes.js"></script>
</body>


</html>
