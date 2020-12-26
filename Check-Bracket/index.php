<?php

function checkBracket($string){
    $stack = new SplStack();
    $arrString = str_split($string);

    foreach ($arrString as $sym) {
        if ($sym == "("){
            $stack->push($sym);
        }
        if ($sym == ")"){
            if ($stack->isEmpty()){
                return False;
            }
            $left = $stack->pop();
            if ($left == $sym){
                return False;
            }
        }
    }

    if ($stack->isEmpty()){
        return True;
    }
    return False;
}

$str = "s * (s – a) * (s – b) * (s – c)";

if (checkBracket($str)){
    echo 'True';
}
else{
    echo 'False';
}