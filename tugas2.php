<?php

function pengulanganAngkot($noAngkot, $kondisiTerminasi){
    echo "<h1>=== Program Angkot Sederhana ===</h1>";
    for($noAngkot; $noAngkot <= $kondisiTerminasi; $noAngkot++){
        if ($noAngkot == 1 || $noAngkot == 3 || $noAngkot == 10 || $noAngkot == 11){
            echo "Angkot no - $noAngkot  tersedia  <br />";
        } else if ($noAngkot == 2 || $noAngkot == 9 || $noAngkot == 12 || $noAngkot == 17){
            echo "Angkot no - $noAngkot  sedang diperbaiki  <br />";
        } else {
            echo "Angkot no - $noAngkot  tidak tersedia  <br />";
        }
    }
}
echo pengulanganAngkot(1, 20);

?>