<?php
// Function to swap two numbers
function swapNumbers(&$num1, &$num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}

// Example numbers
$number1 = 5;
$number2 = 10;

// Display the original values
echo "Before swapping: ";
echo "Number 1: " . $number1 . ", Number 2: " . $number2 . "\n";

// Call the swap function
swapNumbers($number1, $number2);

// Display the swapped values
echo "After swapping: ";
echo "Number 1: " . $number1 . ", Number 2: " . $number2 . "\n";
?>

