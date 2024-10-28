//<!-- //
//    $numl1 =$_POST["numl1"];
//    $numl2 =$_POST["numl2"];
//    $resp = $numl1 + $numl2;
//
//    echo "A soma $numl1 + $numl2 é $resp";
//// -->
<?php
    $apr = $_POST["apres"];
    $numl1 =$_POST["numl1"];
    $numl2 =$_POST["numl2"];
    $escolha=$_POST["escolha"];
    
    //$resp = somarValores($numl1,$numl2);

    

    ola($apr);
    ///criando funcao somar
    switch($escolha){
       case 1: $resp = somarValores($numl1,$numl2);
       break;
       case 2: $resp = subtrairValores($numl1,$numl2);
       break;
       case 3: $resp = multiplicarValores($numl1,$numl2);
       break;
       case 4: $resp = dividirValores($numl1,$numl2);
       break;
       default : $resp =0;
    }
    echo "<br>O resultado do calculo é $resp";
    function ola($apres){
        echo "<br>Ola $apres";
    }
    function somarValores($numl1,$numl2){
        return($numl1+$numl2);
    }
    function subtrairValores($numl1,$numl2){
        return($numl1-$numl2);
    }
    function multiplicarValores($numl1,$numl2){
        return($numl1*$numl2);
    }
    function dividirValores($numl1,$numl2){
        if($numl2 == 0){
            return "impossivel divisao por 0" ;
        }else{
        return($numl1/$numl2);
        }
    }
?>
