<?php
namespace Libs\Matematica\Financiera; // este es el namespace

function tea($capital, $tasa, $periodo){
    // capital * (1 + tasa) ^ periodo  
    return number_format(($capital * (1 + $tasa) ** $periodo),2);
}

 