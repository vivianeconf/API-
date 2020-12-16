<?php

$erro = 0;

if(!empty($_POST)){
    $digitou = !empty($_POST["digitou"]) ? $_POST["digitou"] : null;

    $mensagem = "";

    if(empty($digitou)){
        $mensagem = "Favor adicione a quantidade de frases que deseja ler!";
        $erro = 1;
    }

    echo json_encode(array(
        "erro" => $erro,
        "mensagem" => $mensagem
    ));
    
    return;
}

if(!empty($_GET)){
    $quote = !empty($_GET["quote"]) ? $_GET["quote"] : null;
    $author = !empty($_GET["author"]) ? $_GET["author"] : null;
}

if($erro == 0){
    $quote = ""; $author = "";
}

require 'html.php';