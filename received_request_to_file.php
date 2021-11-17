<?php

    //$inputJSON = file_get_contents('php://input');
    
    //$json = json_decode($inputJSON,true);

    $conteudoArquivo = print_r($_SERVER, true);

    $nomeArquivo = $id . "_" . date('Y-m-d_H.i.s') . "_" . uniqid() . ".json";
    $myfile = fopen("./" . $nomeArquivo, "w") or die("Unable to open file!");
    $txt = "-------------";
    fwrite($myfile, $conteudoArquivo);
    fclose($myfile);

?>
