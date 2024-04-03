<?php

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('questao 3', function (Request $request){
$idade = $request->input('idade');
$mesage = "";
if($idade >= 18){
$mesage = "Maior de idade";
}
else{
    $mesage = "Menor de idade";
}
return $mesage;

});

Route::get('verifica/idade',function(Request $request){
$idade = $request->input('idade');

if ($idade > 18){
    return  "maior de idade";

} else {
    return ("menor de idade ");
}
});

Route:: get('questao 4',function(Request $request){
$numero = $request->input('numero');
if($numero % 2 == 0){
return "par";
} else{
    return 'impar';
}
});

Route::get('questao 1',function(Request $request){
$numero = $request->input('numero');
if($numero >=10){
    return 'maior numero';
}else{
    return 'menor numero';
}
});

Route::get('questao 7',function(Request $request){
$temperatura = $request->input('temperatura');
if($temperatura >=30){
return 'esta quente';
}else{
return 'nao esta quente';
}
});

Route::get('questao 2',function(Request $request){
$numero =$request->input('numero');
if($numero>0){
    return 'este numero e positivo';
}else if($numero>0){
return 'este numero e negativo';
}else{
    return 'este numero e zero';
}
});
Route::get('questao 5',function(Request $request){
$numero1=$request->input('numero1');
$numero2=$request->input('numero2');
if($numero1 > $numero2){
return 'o numero maior e ' . $numero1;
}else{
return 'o numero menor e' . $numero2;
}
});

Route::get('divisao/tres',function(Request $request){
$numero=$request->input('numero');
$resto=($numero%3);
if($numero ==0){
return 'numero e divisivel';
}else{
    return '';
}

});

Route::get('questao 6',function(Request $request){
$numero=$request->input('numero');
$resto=($numero%9);
if($numero==0){
    return 'o numero e divisivel';
}else{
    return 'o numero nao e divisivel';
}
});

Route::get('questao 9',function(Request $request){
$idade=$request->input('idade');
if($idade<12){
    return 'voce e uma crianca';
}else{
    return 'voce nao e uma criança';
}
});

Route::get('questao 12',function(Request $request){
$numero=$request->input('numero');
$resto=($numero%6);
if($numero==0){
    return 'o numero e divisivel';
}else{
    return 'o numero nao e divisivel';
}
});

Route::get('questao 13',function(Request $request){
$nome=$request->input('nome');
if($nome){
    return 'nome e alice';
}else{
    return 'ola alice';
}
});

Route::get('questao 8',function(Request $request){
$numero=$request->input('numero');
$resto=($numero%2);
if($numero==7){
    return 'o numero e multiplo de 7';
}else{
return 'o numero nao e multiplo de 7';
}
});

Route::get('questao 14',function(Request $request){
$idade=$request->input('idade');
if($idade>=18){
    return 'se ele tiver carta e for maior de 18 pode dirigir';
}else{
    return 'se ele nao tiver carta e nao for maior de 18 nao pode dirigir';
}
});

Route::get('questao 17',function(Request $request){
 $idade=$request->input('idade');
if($idade>=18){
return ' ele e maior de idade e chama Mary';
}else{
return ' ele e menor de idade e chama Mary';
}
});

Route::get('questao 19', function (Request $request) {
    $numero1=$request->input('numero1');
$numero2=$request->input('numero2');
$resultado=$numero1*$numero2;
if ($resultado >=100 ){
    return 'seu numero e maior que 100';
}else {
    return 'seu numero e menor que 100';
}
});

Route::get('questao 20',function(Request $request){
    $numero1=$request->input('numero1');
    $numero2=$request->input('numero2');
    $resultado=$numero1+$numero2;
    if($resultado%2 ==0){
        $multiplicar=$numero1*$numero2;
        return $numero1. "x". $numero2 . "=" . $multiplicar;
    }else{
        $dividir = $numero1/$numero2;
        return $numero1 . "/" . $numero2 . "=" . $dividir;
    };
});

Route::get('questao 18',function(Request $request){
    $numero1=$request->input('numero1');
    $numero2=$request->input('numero2');
    if($numero1==0){
        return 'nao e possivel efetuar a divisao ,o resultado e zero';
    }else if ($numero2 ==0) {
       return 'nao e possivel efetuar a divisao ,o resultado e zero';
    };
});

Route::get('questao 11',function(Request $request){
$numero=$request->input('numero');
if($numero>100){
    return 'numero e maior';
}else if ($numero<100) {
    return 'numero e menor';
};
});
Route::get('questao 16',function(Request $request){
    $numero1=$request->input('numero1');
    return $numero1 . "/" . $numero2 . "=" . $resultado;
    $numero2=$request->input('numero2');
    if($numero1>$numero2){
        return 'o numero menor e '$numero1;
    }else if{
        return 'o numero menor e'$numero2;
    }else{
        return ' eles sao iguais';
    };      
});