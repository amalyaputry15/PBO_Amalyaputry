<?php
for ($i=1;$i<6;$i++) {
    for ($j=$i;$j<=6;$j++) {
        echo "&nbsp;"; //it will print blank space
    }
    for ($j=1;$j<=$i;$j++) {
        echo "*";
        echo "*";
    }
    echo '<br/>';
}
?>