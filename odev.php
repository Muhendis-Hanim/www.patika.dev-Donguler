<?php
function star($deger){
    $i=0;
    while ($i<=$deger){
        for ($j=0; $j<=$i; $j++){
            echo "*";
        }
        $i++;
        echo "<br>";
    }
}
  star(6);