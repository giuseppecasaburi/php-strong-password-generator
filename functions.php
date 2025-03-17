<?php
session_start();

isset($_SESSION["password-length"]) ? true : header("Location: ./index.php"); 

$_SESSION["password-length"] = $_POST["password-length"];

// FUNZIONE CHE ACCETTA UN VALORE INTERO IN INGRESSO
function passwordGenerator(int $user_length)
{

    // VARIABILI DEI FILTRI
    $check_maiuscole = isset($_POST["letters"]) ? true : false;
    $check_numeri = isset($_POST["numbers"]) ? true : false;
    $check_speciali = isset($_POST["special-words"]) ? true : false;

    // ARRAY DEI CARATTERI
    $string_array = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "z", "y", "x", "k", "j"];
    $uppercase_letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "Z", "X", "Y", "K", "J"];
    $numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    $special_characters = ["!", "@", ".", "_"];
    $password = "";

    // CONTROLLI SE I FILTRI SONO IMPOSTATI E QUALI
    if ($check_maiuscole) {
        $string_array = array_merge($string_array, $uppercase_letters);
    }

    if ($check_numeri) {
        $string_array = array_merge($string_array, $numbers);
    }

    if ($check_speciali) {
        $string_array = array_merge($string_array, $special_characters);
    }

    // CICLO FOR CHE ITERA n VOLTE IN BASE ALLA LUNGHEZZA DEFINITA DALL'UTENTE E OGNI VOLTA GENERA UN INDICE CASUALE CHE VA DA 0 ALL'INDICE MASSIMO PRESENTE IN $STRING_ARRAY
    // CON L'INDICE GENERATO CASUALMENTE TROVA LA CORRISPONDENZA CON IL VALORE POSTO A QUELL'INDICE NELL'ARRAY E LO AGGIUNGE AI CARATTERI DELLA PASSWORD DA GENERARE
    for ($i = 0; $i < $user_length; $i++) {
        $randomNum_1 = random_int(0, count($string_array) - 1);
        $password .= $string_array[$randomNum_1];
    };

    return $password;
};
?>