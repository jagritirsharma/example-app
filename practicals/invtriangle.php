<?php
// Function to generate an inverted triangle pattern
function invertedTriangle($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        // Print asterisks
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
            if ($j < $i) {
                echo " ";
            }
        }

        // Move to the next line
        echo "\n";
    }
}

// Number of rows in the inverted triangle
$rows = 5;

// Generate the inverted triangle
invertedTriangle($rows);
?>

