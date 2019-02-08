<?php
function make_price ($price) {
    $a = ceil($price);
    if (&a < 1000) {
        $a = number_format($a, 0, '', ' ');
    };
    
    
    $a .= ' ' . ' ';
    return $a;
}
?>