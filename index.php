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

// $_POST prop0
// $_POST prop1
// $_POST prop2
// $_POST prop3
// $_POST prop4
// $_POST prop5
// $_POST prop6









function syndrome($id, $prop){

    if($id == 1){
        $chaine = substr($prop, 0, 1) + substr($prop, 2, 1) + substr($prop, 4, 1) + substr($prop, 6, 1);
        if($chaine % 2 == 0){
            return 0;
        }
        else{
            return 1;
        }
    }

}

$propo = 1010010;

$s1 = 1100;
$s2 = 0101;
$s3 = 0010;

echo(syndrome(1, 1010010));




?>

</body>
</html>
