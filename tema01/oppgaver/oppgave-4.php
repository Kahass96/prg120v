<?php
$tall1 = $_POST['tall1'];
$tall2 = $_POST['tall2'];

$sum = $tall1 + $tall2;
$diff = $tall1 - $tall2;
$prod =$tall1 * $tall2;
$kvotient = $tall1 / $tall2;

echo "Summen er $sum<br>";
echo "Differeansen er $diff<br>";
echo "Produktet er $prod<br>";
echo "Kvotienten er $kvotient<br>";
?>