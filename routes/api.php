<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('exemplo/condicao', function (Request $request){
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

Route:: get('verificar/par',function(Request $request){
$numero = $request->input('numero');
if($numero % 2 == 0){
return "par";
} else{
    return 'impar';
}
});

Route::get('verificar/numero',function(Request $request){
$numero = $request->input('numero');
if($numero >=10){
    return 'maior numero';
}else{
    return 'menor numero';
}
});

Route::get('verificar/temperatura',function(Request $request){
$temperatura = $request->input('temperatura');
if($temperatura >30){
return 'esta quente';
}else{
return 'nao esta quente';
}
});

Route::get('verificar/numero',function(Request $request){
$numero =$request->input('numero');
if($numero>0){
    return 'este numero e positivo';
}else if($numero>0){
return 'este numero e negativo';
}else{
    return 'este numero e zero';
}
});
Route::get('verificar/numero',function(Request $request){
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
    return ''

}
});
