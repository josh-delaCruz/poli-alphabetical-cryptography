<?php
    //error_reporting(E_ERROR | E_PARSE);
    
    session_start();

    function encrypt($word, $key){
        $secret = "";
        $keyI = 1;
        $ll = 0;
        $modulo = 26;

        //cifrario con la posizione delle lettere
        $cipher = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

        $wordChar = str_split($word); //trasforma la stringa in un array di char
        
        for($i = 0; $i < count($wordChar); $i++){
            for($j = 0; $j < count($cipher); $j++){
                if($cipher[$j] == $wordChar[$i]){
                    $ll = $j;
                    break;
                }
            }

            if($keyI > $key){
                $keyI = 1;
            }

            $index = "C".$keyI;
            $dispalcement = ($ll + $_SESSION[$index])%count($cipher);
            $keyI++;

            $secret .= $cipher[$dispalcement];
        }
    
    
        return $secret;
    }
    
    function decrypt($word, $key){
        $clear = "";
        $keyI = 1;
        $ll = 0;
        //$modulo = 26;

        //cifrario con la posizione delle lettere
        $cipher = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

        $clearChar = str_split($word); //trasforma la stringa in un array di char
        
        for($i = 0; $i < count($clearChar); $i++){
            for($j = 0; $j < count($cipher); $j++){
                if($cipher[$j] == $clearChar[$i]){
                    $ll = $j;
                    break;
                }
            }  

            if($keyI > $key){
                $keyI = 1;
            }
    
            $index = "D".$keyI;
            $dispalcement = ($ll + count($cipher) - $_SESSION[$index])%count($cipher);
            $keyI++;    

            $clear .= $cipher[$dispalcement];
        }

        return $clear;
    }

?>