<?php
$word1 = 'class';
$word2 = 'kodego';
$word3 = 'top';

echo "Number 1" . "<br>";
if (strlen($word1) > 5) {
    echo $word1 . " is more than 5 characters." . "<br>";
} else {
    echo $word1 . " is not more than 5 characters." . "<br>";
}

if (strlen($word2) > 5) {
    echo $word2 . " is more than 5 characters." . "<br>";
} else {
    echo $word2 . " is not more than 5 characters." . "<br>";
}

if (strlen($word3) > 5) {
    echo $word3 . " is more than 5 characters." . "<br>";
} else {
    echo $word3 . " is not more than 5 characters." . "<br>";
}
echo "<br>";



$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

$totalCost1 = $quantity1 * $price1;
$totalCost2 = $quantity2 * $price2;

echo "Number 2" . "<br>";
if ($totalCost1 < $totalCost2) {
    echo "Deal 1 is the best deal to purchase the item." . "<br>";
    echo "Total cost for Deal 1: $" . $totalCost1 . "<br>";
} elseif ($totalCost2 < $totalCost1) {
    echo "Deal 2 is the best deal to purchase the item." . "<br>";
    echo "Total cost for Deal 2: $" . $totalCost2 . "<br>";
} else {
    echo "Both deals have the same total cost." . "<br>";
    echo "Total cost for both deals: $" . $totalCost1 . "<br>";
}
echo "<br>";
$monthName = 'March';

echo "Number 3" . "<br>";
switch ($monthName) {
    case 'January':
    case 'March':
    case 'May':
    case 'July':
    case 'August':
    case 'October':
    case 'December':
        echo $monthName . " has 31 days." . "<br>";
        break;
    case 'April':
    case 'June':
    case 'September':
    case 'November':
        echo $monthName . " has 30 days." . "<br>";
        break;
    case 'February':
        echo $monthName . " has 28 or 29 days." . "<br>";
        break;
    default:
        echo "Invalid month." . "<br>";
        break;
}
echo "<br>";

echo "Number 4" . "<br>";

$students =  '[{"name" : "John Garg","age"  : "15","school" : "Ahlcon Public school"},
{"name" : "Smith Soy","age"  : "16","school" : "St. Marie school"},
{"name" : "Charle Rena","age"  : "16","school" : "St. Columba school"}]';

$studentsArray = json_decode($students, true);

foreach ($studentsArray as $student) {
    echo "Name: " . $student['name'] . "<br>";
    echo "Age: " . $student['age'] . "<br>";
    echo "School: " . $student['school'] . "<br>";
    echo "<br>";
}
echo "<br>";

echo "Number 5" . "<br>";

echo "<table>";
for ($i = 1; $i <= 10; $i++) {
    echo "Division Table for " . $i . "<br>";
    echo "------------------------" . "<br>";
    
    for ($j = 1; $j <= 10; $j++) {
        $result = $i / $j;
        echo $i . " / " . $j . " = " . $result . "<br>";
    }
    
    echo "<br>";
}

echo "</table>";


?>