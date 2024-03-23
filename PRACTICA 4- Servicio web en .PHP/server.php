<?php
    require_once "lib/nusoap.php";
    function getPlayas($datos){
        if ($datos == "Playas"){
            $playas = array(
                "Cancún",
                "Puerto Vallarta",
                "Acapulco",
                "Riviera Maya",
                "Cozumel",
                "Tulum",
                "Playa del carmen",
                "Huatulco",
                "Cabo San Lucas",
                "Isla Mujeres"
            );
            $lista = "<ol>";
            foreach ($playas as $playa) {
            $lista .= "<li>" . $playa . "</li>";
            }
            $lista .= "</ol>";

            return $lista;
        }else{
            return "No hay playas de México";
        }
    }
    $server = new soap_server(); //Instancia de SOAP
    $server->register("getPlayas"); //Indica el metodo o funcion a devolver 
    if ( !isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA =file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA);
?> 




