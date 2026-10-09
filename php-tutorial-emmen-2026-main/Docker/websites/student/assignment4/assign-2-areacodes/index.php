<?php 
$areacodes = [14, 26, 12, 58, 34, 66, 7, 41, 66, 14, 14];

function maximumnum($lista){
    $maxnumber = 0;
    $counter = count($lista);
    for($i = 0; $i < $counter; $i++){
        $number = $lista[$i];
        if($number > $maxnumber){
            $maxnumber = $number;
        }
    }
    print($maxnumber);
}

function findnum($lista,$findnum){
    $result = "fail!";
    $counter = count($lista);
    for($i = 0; $i < $counter; $i++){
        $number = $lista[$i];
        if($number == $findnum){
            $result = $findnum . " Success!";
            break;
        }
    }
    print($result);
}

function findmultiplenum($lista,$findnum1,$findnum2){
    $result1 = $findnum1 . " was a fail!";
    $counterresult1 = 0;
    $result2 = $findnum2 . " was a fail!";
    $counterresult2 = 0;
    $counter = count($lista);
    for($i = 0; $i < $counter; $i++){
        $number = $lista[$i];
        if($number == $findnum1){
            $result1 = $findnum1 . " was a Success! and ";
            $counterresult1++;
        }
        if($number == $findnum2){
            $result2 = $findnum2 . " was a Success! and ";
            $counterresult2++;
        }
    }
    
    if($counterresult1 != 0){
        print($result1 . "We found it " . $counterresult1 . " times");
    }else {
        print($result1);
    }

    if($counterresult2 != 0){
        print("<br>" . $result2 . "We found it " . $counterresult2 . " times");
    }else {
        print("<br>" . $result2);
    }
}

findmultiplenum($areacodes,66,14)

?>