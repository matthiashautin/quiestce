<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Qui est ce ?</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<?php
// CTRL+K+c=commenter
// CTRL+K+u=decommenter



$propo = "1110000";


echo("\nMensonge: ".mensonge($propo));
echo("\nVraie réponse: ".vraireponse($propo));

echo("\n Vous avez choisi le personnage numéro ".solution(vraireponse($propo)));





function solution($reponse){
    $p1 = "0001010";
    $p2 = "1101100";
    $p3 = "0000000";
    $p4 = "0100101";
    $p5 = "1010101";
    $p6 = "0110110";
    $p7 = "1000110";
    $p8 = "1001001";
    $p9 = "1011010";
    $p10 = "1111111";
    $p11 = "0011100";
    $p12 = "0001111";
    $p13 = "0111001";
    $p14 = "0010011";
    $p15 = "1100011";
    $p16 = "1110000";

    switch($reponse){
        case $p1:
            $solution = 1;
            break;
        case $p2:
            $solution = 2;
            break;
        case $p3:
            $solution = 3;
            break;
        case $p4:
            $solution = 4;
            break;
        case $p5:
            $solution = 5;
            break;
        case $p6:
            $solution = 6;
            break;
        case $p7:
            $solution = 7;
            break;
        case $p8:
            $solution = 8;
            break;
        case $p9:
            $solution = 9;
            break;
        case $p10:
            $solution = 10;
            break;
        case $p11:
            $solution = 11;
            break;
        case $p12:
            $solution = 12;
            break;
        case $p13:
            $solution = 13;
            break;
        case $p14:
            $solution = 14;
            break;
        case $p15:
            $solution = 15;
            break;
        case $p16:
            $solution = 16;
            break;
    }
    return $solution;
}



function syndrome($id, $prop){

    if($id == 1){
        $chaine = intval(substr($prop, 0, 1)) + intval(substr($prop, 2, 1)) + intval(substr($prop, 4, 1)) + intval(substr($prop, 6, 1));
    } elseif($id == 2){
        $chaine = intval(substr($prop, 1, 1)) + intval(substr($prop, 2, 1)) + intval(substr($prop, 4, 1)) + intval(substr($prop, 5, 1));
    } elseif($id == 3){
        $chaine = intval(substr($prop, 3, 1)) + intval(substr($prop, 4, 1) + intval(substr($prop, 5, 1)) + intval(substr($prop, 6, 1)));
    } else {
        throw("Erreur d'argument: Id incorrect");
    }

    if($chaine % 2 == 0){
        return 0;
    }
    else{
        return 1;
    }

}


function mensonge($propo){
    $s1 = syndrome(1, $propo);
    $s2 = syndrome(2, $propo);
    $s3 = syndrome(3, $propo);
    $s = strval($s1).strval($s2).strval($s3);

    switch($s){
        case "000":
            $m = 0;
            break;
        case "100":
            $m = 1;
            break;
        case "010":
            $m = 2;
            break;
        case "110":
            $m = 3;
            break;
        case "001":
            $m = 4;
            break;
        case "111":
            $m = 5;
            break;
        case "011":
            $m = 6;
            break;
        case "101":
            $m = 7;
            break;
    }
    return $m;
}

function vraireponse($s){
    if(mensonge($s) != 0){
        $index = mensonge($s) - 1;
        $erreur = substr($s, $index, 1);
        if($erreur == "0"){
            $repl = "1";
        }
        else{
            $repl = "0";
        }
        $vraireponse = substr_replace($s, $repl, $index, 1);
    }
    else {
        $vraireponse = $s;
    }
    return $vraireponse;
}



?>

</body>
</html>
