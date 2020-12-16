<?php

$anos = empty($_GET['anos']) ? null : $_GET['anos'];

if (!empty($anos)) {
    $client = curl_init();

    curl_setopt($client, CURLOPT_URL, "https://parallelum.com.br/fipe/api/v1/carros/marcas/59/modelos/5940/anos/".$anos);
    curl_setopt($client, CURLOPT_HEADER, false);
    curl_setopt($client, CURLOPT_RETURNTRANSFER , true);
    
    $anos = curl_exec($client);
    
    curl_close($client);
    
    $obj = new stdClass;
    $obj = $anos;
    
    echo json_encode($obj);    
} else {
    echo json_encode(array(
        "status" => 400,
        "mensagem" => "Faltam parametros"
    ));     
}