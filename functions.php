<?php

function genCharsString(array $arr){
    $targhetString = '';
    foreach ($arr as $key => $value) {
        switch ($key) {
            case 'char':
                $targhetString .= 'abcdefghijklmnopqrstuvwxyz';
                break;
            case 'numbers':
                $targhetString .= '0123456789';
                break;
            case 'capital':
                $targhetString .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                break;
            case 'specials':
                $targhetString .= '!?&%$<>^+-*/()[]{}@#_=)';
                break;
            
            default:
                break;
        }
    }
    return $targhetString;
}


function genPassword(array $arr, $repeat, $pswLength){

    $pswArrChar = genCharsString($arr);
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