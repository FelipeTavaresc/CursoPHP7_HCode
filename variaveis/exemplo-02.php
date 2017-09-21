<?php
    //$anoNacimento = 1994;
    //$nomeCompleto = "Felipe Tavares";
    //Na linha de baixo temos uma variável com número no nome
    $nome1 = "Felipe";
    $sobrenome = "Tavares";

    $nomeCompleto =  $nome1 . " " . $sobrenome;

    echo $nomeCompleto;

    exit;

    echo $nome1;
    echo "<br/>";
    //unset($nome1);
    //Unset: Limpa o conteúdo da variável
    
    if(isset($nome1)){
        echo $nome1;
    }
?>