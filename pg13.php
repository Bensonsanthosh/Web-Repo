<?php
$students = array("Alan", "Basil", "Christo", "Divya", "Elizabeth");
echo "<h2>Original Student List:</h2>";
echo "<div class='student-list'>";
print_r($students);
echo "</div>";
asort($students);
echo "<h2>Sorted Student List (Ascending Order):</h2>";
echo "<div class='student-list'>";
print_r($students);
echo "</div>";
arsort($students);
echo "<h2>Sorted Student List (Descending Order):</h2>";
echo "<div class='student-list'>";
print_r($students);
echo "</div>";
?>