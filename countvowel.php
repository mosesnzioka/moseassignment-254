<?php
function countVowels($str) {
    // Define the vowels
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;

    // Loop through each character in the string
    for ($i = 0; $i < strlen($str); $i++) {
        // Check if the character is a vowel
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

$inputString= "moses nzioka!";
echo "Number of vowels: " . countVowels($inputString);
?>
