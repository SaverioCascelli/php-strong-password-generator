<?php


function genPassword($pswLength, $repeat){
    $specials= '!?&%$<>^+-*/()[]{}@#_=)';
    $numbers= '0123456789';
    $char = 'abcdefghijklmnopqrstuvwxyz';
    $capitalChar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $pswArrChar = $numbers . $specials . $char . $capitalChar;
    $targhetString = '';

    for ($i=0; $i < $pswLength; $i++) {
        if(strlen($pswArrChar) < 1){
            echo 'break';
            break; 
        }
        $index = rand(0, strlen($pswArrChar)-1 );
        $targhetString .= $pswArrChar[$index];
        if($repeat === 'noRepeat'){
            $pswArrChar = str_replace($pswArrChar[$index], '',$pswArrChar);

        }
    }
    return $targhetString;
}