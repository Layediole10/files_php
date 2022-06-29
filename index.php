<?php

    echo "WELCOME!";

    $myDate = date('d-m-y', time());
    if (!file_exists("$myDate.txt")) {

        $openFile = fopen("$myDate.txt", "w");
        $compteur = 0;
        fwrite($openFile, $compteur);
        fclose($openFile);
    }else{
        
        $openFile = fopen("$myDate.txt", "r");
        $compteur = intval(fread($openFile, filesize("$myDate.txt")));
        $compteur++;
        $openFile = fopen("$myDate.txt", "w");
        fwrite($openFile, $compteur);
        fclose($openFile);        
    }


?>


 

