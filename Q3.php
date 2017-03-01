<?php
$str = 'wwwwaaadexxxxxx';

function show($str){
    $n='';
    $count = 1;
    $len = strlen($str);
    
    for ( $i = 0; $i <= $len; $i++){
         $char1 = substr( $str, $i, 1 );
         $char2 = substr( $str, $i+1, 1 );
        if ( $char1 == $char2 ){
           
            $count++;       

        }else{
          $n .= $char1.$count;    
          $count = 1;
        }
    }

        return $n;
}

$a = show($str);
echo $a;

?>