<?php
function isPrimo(int $num): bool{
    if($num==1) return true;
    for($i=2; $i<$num; $i++){
        if($num%$i==0) return false;
    }
    return true;
}
$numPrimos=10;
$apartirdedonde=1;

$cont=0;
do{
    if(isPrimo($apartirdedonde)){
        echo "$apartirdedonde, ";
        $cont++;
    }
    $apartirdedonde++;
}while($cont<$numPrimos);