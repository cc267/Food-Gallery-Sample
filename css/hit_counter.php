<?php
$hit_count_file = 'hit_count.txt';

// Read the current hit count from the file
$current_count = file_exists($hit_count_file) ? (int)file_get_contents($hit_count_file) : 0;

// Increment the hit count
$current_count++;

// Write the updated hit count back to the file
file_put_contents($hit_count_file, $current_count);

// Display the hit count
echo $current_count;
?>