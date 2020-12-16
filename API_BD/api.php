<?php

$id = empty($_GET['id']) ? null : $_GET['id'];

if (!empty($id)) {
    $client = curl_init();

    curl_setopt($client, CURLOPT_URL, "https://breakingbadapi.com/api/characters/".$id);
    curl_setopt($client, CURLOPT_HEADER, false);
    curl_setopt($client, CURLOPT_RETURNTRANSFER , true);
    
    $id = curl_exec($client);
    
    curl_close($client);
    
    $obj = new stdClass;
    $obj = $id;
    
    echo json_encode($obj);    
} else {
    echo json_encode(array(
        "status" => 400,
        "mensagem" => "Faltam parametros"
    ));     
}