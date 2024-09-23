<?php
class segitigaKetiga{}
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br />";
}
 
for ($i = 5; $i >= 1; $i--) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br />";
}
?>
