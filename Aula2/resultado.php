<?php 
$n1 = (int) $_POST["n1"];
$n2 = (int) $_POST["n2"];
$operacoes = $_POST["operacao"]; 

if ($operacoes == ""){
    echo "sem informacao";
}
elseif ($operacoes == "adicao"){
    echo $n1 + $n2;
}
elseif ($operacoes == "subtracao"){
    echo $n1 - $n2;
} 
elseif ($operacoes == "multiplicacao"){
    echo $n1 * $n2;
} 
else {
    echo $n1 / $n2;
}

?>