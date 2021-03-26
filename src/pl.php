<?php declare(strict_types=1);

function popular_PL(array $responses): string
{
    $pls = [];
    foreach($responses as $response) 
    {
        array_push($pls, ...$response["reponses"]["Quels langages de programmation utilisez-vous"] ?? []);
               
    }

    $stats = [];
    
    foreach($pls as $pl)
    {
        
        $stats[$pl] = ($stats[$pl] ?? 0) + 1;   

    }
    arsort($stats);    

    return array_key_first($stats);
}