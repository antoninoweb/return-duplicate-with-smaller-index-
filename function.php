<?php 

function firstDuplicate($a) {


    $diff = array_diff_assoc($a, array_unique($a)); // get all duplicate
    
         $risultato = array_shift(array_values($diff)); // get first
    
    if(!$risultato){
        $risultato = -1; 
    }
    
    return $risultato;
    
}

?>
