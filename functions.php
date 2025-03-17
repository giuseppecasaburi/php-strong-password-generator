<?php
// PRENDO IL PARAMENTRO DELLA LUNGHEZZA DALL'URL E LO TRANSFORMO IN UN VALORE INT
$user_length = (int)$_GET["password-length"];

// FUNZIONE CHE ACCETTA UN VALORE INTERO IN INGRESSO
function passwordGeneretor(int $user_length)
{
    $string_array = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "Z", "X", "Y", "K", "J", "a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "z", "y", "x", "k", "j", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "!", "@", ".", "_"];
    $password = "";

    // CICLO FOR CHE ITERA n VOLTE IN BASE ALLA LUNGHEZZA DEFINITA DALL'UTENTE E OGNI VOLTA GENERA UN INDICE CASUALE CHE VA DA 0 ALL'INDICE MASSIMO PRESENTE IN $STRING_ARRAY
    // CON L'INDICE GENERATO CASUALMENTE TROVA LA CORRISPONDENZA CON IL VALORE POSTO A QUELL'INDICE NELL'ARRAY E LO AGGIUNGE AI CARATTERI DELLA PASSWORD DA GENERARE
    for ($i = 0; $i < $user_length; $i++) {
        $randomNum_1 = random_int(0, count($string_array) - 1);
        $password .= $string_array[$randomNum_1];
    };

    echo $password;
}

passwordGeneretor($user_length);