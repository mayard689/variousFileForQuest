<?php

$message="0@sn9sirppa@#?ia'jgtvryko1";
//$message="q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
//$message="aopi?sgnirts@#?sedhtg+p9l!";
    
$chiffreCle=strlen($message)/2;
$sousChaine=substr($message, 5,$chiffreCle);
$replace=str_replace("@#?"," ",$sousChaine);
$code=strrev($replace);
echo($code);

// les solutions sont :
// j'ai appris
// toutes les ficelles 
// des strings
