<?php
// Function to swap two numbers
function swapNumbers(&$firstNumber, &$secondNumber) {
    // Use a temporary variable to swap values
    $temp = $firstNumber;
    $firstNumber = $secondNumber;
    $secondNumber = $temp;
}

// Example numbers
$originalNumber = 5;
$newNumber = 10;

// Display the original values
echo "Before swapping: ";
echo "Original Number: $originalNumber, New Number: $newNumber\n";

// Call the swap function
swapNumbers($originalNumber, $newNumber);

// Display the swapped values
echo "After swapping: ";
echo "Original Number: $originalNumber, New Number: $newNumber\n";
?>

