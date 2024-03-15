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
