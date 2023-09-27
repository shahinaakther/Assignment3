<?php

$text = "The quick brown fox jumps over the lazy dog.";


function changeText($text) {
    
    $text = strtolower($text);

    
    $text = str_replace("brown", "red", $text);

    return $text;
}


$modifiedText = changeText($text);
print_r($modifiedText);
?>
