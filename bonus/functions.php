<?php

//funzione per generare la password
function generatePassword($pswLength) {

    //creo gli array da cui prendere gli elemnti per creare la password
    $uppercase = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $lowercase = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $symbols = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')'];

    //mescolo insieme i caratteri
    $characters = array_merge($uppercase, $lowercase, $numbers, $symbols);
    var_dump($characters);
    $charactersShuffled = $characters;
    shuffle($charactersShuffled);
    var_dump($charactersShuffled);


    //generazione della password
    $password = '';
    for ($i = 1; $i <= $pswLength; $i++) {
        $randomIndex = rand(0, count($characters) - 1);
        var_dump($randomIndex);
        $password .= $characters[$randomIndex];
    }
    var_dump($password);
    return $password;
}

?>