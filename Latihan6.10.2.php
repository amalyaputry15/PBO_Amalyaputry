<?php
class segitigaKedua{}
for ($i=1;$i<6;$i++) {
    for ($j=$i;$j<=6;$j++) {
        echo ""; //it will print blank space
    }
    for ($j=1;$j<=$i;$j++) {
        echo "*";
    }
    echo '<br/>';
}
for ($i=5;$i>=1;$i--) {
    for ($j=$i;$j>=1;$j--) {
        echo ""; //it will print blank space
    }
    for ($j=1;$j<=$i;$j++) {
        echo "*";
    }
    echo '<br/>';
}
?>