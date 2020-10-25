<?php

if ($_SESSION["rol"] != "agpd"){
    echo ' <script>
    
    
    window.location = "inicio";
    
    </script>';

    return;
}

?>