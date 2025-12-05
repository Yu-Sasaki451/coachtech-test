<?php

function info($kind,$maker,$body){
$guitar = $maker . $body;
    if($kind=="elec"){
        return  $guitar;
}
else{
    return "";

}
}

$guitar_info = info("elec","Fender","Strat");
echo $guitar_info;