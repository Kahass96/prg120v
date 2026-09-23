<?php

$tall1 = $_POST['tall1'];
$tall2 = $_POST['tall2'];
$tall3 = $_POST['tall3'];

echo "Tall 1 er $tall1<br>";
echo "Tall 2 er $tall2<br>";
echo "Tall 3 er $tall3<br><br>";


if ($tall1 < $tall2)
    {
        echo "Tall 1 er mindre enn Tall 2<br>";
    }
else if ($tall1 == $tall2)
    {
        echo "Tall 1 er lik Tall 2<br>";
    }
else
    echo "Tall 1 er større enn Tall 2<br>";

if ($tall1 < $tall3)
    {
        echo "Tall 1 er mindre enn Tall 3<br>";
    }
else if ($tall1 == $tall3)
    {
        echo "Tall 1 er lik Tall 3<br>";
    }
else
    echo "Tall 1 er større enn Tall 3<br>";

if ($tall2 < $tall3)
    {
        echo "Tall 2 er mindre enn Tall 3<br>";
    }
else if ($tall2 == $tall3)
    {
        echo "Tall 2 er lik Tall 3<br>";
    }
else
    echo "Tall 2 er større enn Tall 3<br>";
?>
