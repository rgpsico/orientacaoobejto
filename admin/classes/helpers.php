<?php

function convertDateFormatoBr(string $data){
    $data1 = explode('-',$data);
    $dia  = $data[2];
    $mes  =  $data[1];
    $ano  = $data[0];
    $data1 = $dia."/".$mes."/".$ano;
    return $data1;
}

function getDayDataCad(string $data){
    $data1 = explode('-',$data);
    $dia  = $data[2];

    return $dia;
}


function getMonhDataCad(string $data){
    $data1 = explode('-',$data);
    $mes  =  $data[1];
    return $mes;
}

function convertDayNumerForDayName($dia){
    switch ($dia) {
        case '1':
       $nomeDia = "Domingo";
            break;
            case '2':
        $nomeDia = "Segunda";
            break;
            case '3':
        $nomeDia = "terça";
           break;
           case '4':
        $nomeDia = "Quarta";
            break;
            case '5':
        $nomeDia = "Quinta";
            break;
            case '6':
        $nomeDia = "Sexta";
             break;

             case '7':
        $nomeDia = "Sabado";
             break;
    }

    return $nomeDia;

}

function convertMesNumerForDayName($dia){
    switch ($dia) {
        case '1':
       $nomeMes = "Jan";
            break;
            case '2':
        $nomeMes = "Fev";
            break;
            case '3':
        $nomeDia = "Mar";
           break;
           case '4':
        $nomeDia = "Abr";
            break;
            case '5':
        $nomeDia = "Mai";
            break;
            case '6':
        $nomeMes = "Jun";
             break;

             case '7':
        $nomeMes = "Jul";
             break;

             case '8':
        $nomeMes = "Ago";
             break;

             case '9':
        $nomeMes = "Set";
             break;

            case '10':
        $nomeMes = "Out";
            break;
    
            case '11':
        $nomeMes = "Nov";
            break;

            case '12':
        $nomeMes = "Dez";
            break;
        }

    return $nomeMes;

}



?>