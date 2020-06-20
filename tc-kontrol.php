<?php

### CruzNadin - Kadir Barcın ###

function tcNoControl($tcNo)  {  
    $tc = trim($tcNo);
    $tclen = strlen($tc);
    if($tclen == 11){
        $tc_sor = ((($tc[0] + $tc[2] + $tc[4] + $tc[6] + $tc[8])*7) - ($tc[1] + $tc[3] + $tc[5] + $tc[7])) % 10;
        if($tc_sor==$tc[9]){
            if(is_numeric($tc)){
                if(!$tc[0]==0){
                    $tc_mod = ($tc[0]+$tc[1]+$tc[2]+$tc[3]+$tc[4]+$tc[5]+$tc[6]+$tc[7]+$tc[8]+$tc[9]) % 10;
                    if($tc_mod == $tc[10]){
                        return true;
                    }
                }
            }
        }
    }
}  


if(tcNoControl('64155696440')){ // Doğru işlem 
    echo 'TC DOĞRU';
}

if(tcNoControl('02645396440')){ // Yanlış işlem 
    echo 'TC YANLIŞ';
}

### CruzNadin - Kadir Barcın ###

?>