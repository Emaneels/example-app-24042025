<?php

// $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ";

// $paragraphs = 3;
// echo str_repeat("<p>$lorem</p>", $paragraphs);



function generateLoremIpsumByLength($numCharacters = 1000) {
    $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ";
    $text = '';
    
    // Repeat the string until it reaches the required length
    while (strlen($text) < $numCharacters) {
        $text .= $lorem;
    }
    
    // Trim the text to exactly match the desired length
    return substr($text, 0, $numCharacters);
}

// Example: Generate 150 characters of text
echo generateLoremIpsumByLength(992);


?>
