<?php
// Function to print an inverted triangle pattern
function printInvertedTriangle($rows) {
    // Loop to iterate through each row of the inverted triangle
    for ($currentRow = $rows; $currentRow >= 1; $currentRow--) {
        // Print spaces before the asterisks in each row
        for ($space = $rows - $currentRow; $space > 0; $space--) {
            echo " ";
        }

        // Print asterisks in each row
        for ($asterisk = 1; $asterisk <= 2 * $currentRow - 1; $asterisk++) {
            echo "*";
            // Add a space after each asterisk, except for the last one in the row
            if ($asterisk < 2 * $currentRow - 1) {
                echo " ";
            }
        }

        // Move to the next line after printing each row
        echo "\n";
    }
}

// Number of rows in the inverted triangle
$numberOfRows = 5;

// Call the function to print the inverted triangle
printInvertedTriangle($numberOfRows);
?>

