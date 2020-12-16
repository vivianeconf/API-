<?php

$quote = empty($_GET['quote']) ? null : $_GET['quote'];

if (!empty($quote)) {
    $client = curl_init();

    curl_setopt($client, CURLOPT_URL, "https://breaking-bad-quotes.herokuapp.com/v1/quotes/".$quote);
    curl_setopt($client, CURLOPT_HEADER, false);
    curl_setopt($client, CURLOPT_RETURNTRANSFER , true);
    
    $quote = curl_exec($client);
    
    curl_close($client);
    
    $obj = new stdClass;
    $obj = $quote;
    
    echo json_encode($obj);    
} else {
    echo json_encode(array(
        "status" => 400,
        "mensagem" => "Faltam parametros"
    ));     
}