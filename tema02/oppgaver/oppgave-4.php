<?php

$gift=$_POST['gift'];
$barn=$_POST['barn'];

if ($gift =='j' and $barn == 'j')
    {
        echo "Du er gift og har barn";
    }

else if ($gift=='j' and $barn=='n')
    {
        echo "Du er gift og har ikke barn";
    }

else if ($gift=='n' and $barn=='j' )
    {
        echo "Du er ikke gift og har barn";
    }

else {
    echo "Du er ikke gift og har ikke barn";
}
?>
