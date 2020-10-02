<?php
    $n=array(array(12,5),array(3,3));
    $t=array(array(9,3),array(7,8));

    echo "Addition of matrix is <br>";

    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $n[$i][$j]+$t[$i][$j]." ";
        }
        echo "<br>";
    }
?>