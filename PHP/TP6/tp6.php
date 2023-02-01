<?php

$a=$_REQUEST['t1'];
$b=$_REQUEST['t2'];
$op=$_REQUEST['t3'];

$s=$a+$b;
$p=$a*$b;
$r=$a%$b;
$d=$a/$b;

if($op=='+')
	echo 'voila la somme: '. $s.'<br>';
else if ($op=='*')
	echo 'voila le produit: '. $p.'<br>';
else if ($op=='%')
	echo 'voila le reste: '. $r.'<br>';
else if ($op=='/')
	echo 'voila la division: '. $d.'<br>';
else if ($op == '<' or $op == '>'){
    if($a<$b){
        echo $a.' est plus petit que '.$b;
    }
    else{
        echo $a.' est plus grand que '.$b;
    }
}

?>