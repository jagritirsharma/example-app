<?php

// Define the number of rows in the inverted triangle
$rows = 5;

// Iterate through each row of the inverted triangle
for ($i = $rows; $i >= 1; --$i) {
    // Iterate through each column of the current row
    for ($j = 1; $j <= $i; ++$j) {
        // Print the asterisk symbol for each column
        echo '* ';
    }
    // Move to the next line after each row is printed
    echo "\n";
}
?>
