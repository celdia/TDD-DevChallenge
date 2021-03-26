<?php declare(strict_types=1);

function popular_PL(array $responses): string
{
    $pls = [];
    foreach($responses as $response) {
        array_push($pls, ...$response["reponses"]["Quels langages de programmation utilisez-vous"] ?? []);
        //var_dump($pls);       
    }

    $stats = [];
    
    foreach($pls as $pl) {
        //var_dump($ide);
        /*if (!array_key_exists($ide, $stats)) {
            $stats[$ide] = 0;
            
        }
        $stats[$ide]++;*/
        //var_dump($stats);
        $stats[$pl] = ($stats[$pl] ?? 0) + 1;   

    }
    arsort($stats);

    //var_dump($stats);
    

    return array_key_first($stats);
}