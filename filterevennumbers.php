<?php
function filterEvenNumbers($numbers) {
    return array_filter($numbers, function($number) {
        return $number % 2 === 0;
    });
}

$inputArray = [20, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$evenNumbers = filterEvenNumbers($inputArray);
print_r($evenNumbers);
?>
