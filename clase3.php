<?php

function igualdadComun($a, $b) {
    if ($a == $b) {
        return "<b>$a</b> es igual estricto a <b>$b</b>";
    }
    
    return "<b>$a</b> NO es igual a <b>$b</b>";
}
function igualdadEstricta($a, $b) {
    if ($a === $b) {
        return "<b>$a</b> es igual estricto a <b>$b</b>";
    }
    
    return "<b>$a</b> NO es igual estricto a <b>$b</b>";
}

?>