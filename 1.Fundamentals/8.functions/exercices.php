<?php 
//Use a function that capitalizes the first letter of the provided argument. Example: "émile" should return "Émile"
function capitalize($word){
    return ucfirst($word);
}

echo capitalize("je suis là");
echo '<br>';
echo '<br>';


//Use the native function allowing you to display the current year.
echo date('Y');
echo '<br>';
echo '<br>';


//Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
date_default_timezone_set("Europe/Brussels");

echo date('Y-m-d H:i:s');
echo '<br>';
echo '<br>';


//Create a "Sum" function that takes 2 numbers and returns their sum.
function sum($first_number, $second_number){
    return $first_number + $second_number;
}

echo sum(2, 3);
echo '<br>';
echo '<br>';


//Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : "Error: argument is the not a number."
function sumImproved($first_number, $second_number){

    if (is_numeric($first_number) == true AND is_numeric($second_number) == true){
        
        return $first_number + $second_number;
    } else {
        echo 'ERROR : One of the arguments NaN';
    }
}

echo sumImproved("a", 3);
echo '<br>';
echo sumImproved(3, 3);
echo '<br>';
echo '<br>';


//Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word. Example: "In code we trust!" should return: ICWT).
function string_acronym($string){
    $text_string = ucwords($string);
    $each_word = preg_split('/\s/',$text_string);
    $acronym = "";

    foreach ($each_word as $word){
        $acronym = "$acronym$word[0]";
    }
    return $acronym;
}

echo string_acronym("In code we trust");
echo '<br>';
echo '<br>';

//Create a function that replaces the letters "a" and "e" with "æ". Example: "caecotrophie" should return "cæcotrophie".
function ae_replacement($string){
    $correct_small = str_replace('ae', 'æ', $string);
    return $correct_small;
}


echo ae_replacement('caecotrophie');
echo '<br>';
echo '<br>';


//Create the opposite function 'ae_replacement'.
function opposite_replacement($string){
    $correct_small = str_replace('æ', 'ae', $string);
    return $correct_small;
}


echo opposite_replacement('cæcotrophie');
echo '<br>';
echo '<br>';
echo '<br>';
?>