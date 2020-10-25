<?php

require_once "Controladores/plantillaC.php";

require_once "Controladores/GomezPalacioC.php";
require_once "Modelos/GomezM.php";

require_once "Controladores/AlumnosGPDC.php";
require_once "Modelos/AlumnosGPDM.php";


//cambio 1

$plantilla = new Plantilla();
$plantilla -> LlamarPlantilla();

