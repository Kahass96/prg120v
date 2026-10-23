<?php

$tall1 = $_POST['tall1'];
$tall2 = $_POST['tall2'];

echo "Tall 1 er $tall1<br>";
echo "Tall 2 er $tall2<br>";

if ($tall1 < $tall2)
    {
        echo "Tall 1 er mindre enn Tall 2<br>";
    }
else if ($tall1 == $tall2)
    {
        echo "Tall 1 er lik Tall 2<b>";
    }
else 
    {
        echo "Tall 1 er større enn Tall 2<b>";
    }


?>
