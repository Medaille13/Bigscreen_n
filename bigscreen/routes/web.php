<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//------------------UTILISATEUR--------------------
Route::get('/', function(){
    return redirect()->route('formulairesatisfaction');
});

//page enquête de satisfaction
Route::get('/formulaire',"App\Http\Controllers\PeopleController@getquestion")->name('formulairesatisfaction');

//poster l'enquête de satisfaction
Route::post('/formulaire',"App\Http\Controllers\PeopleController@postanswer")->name('envoisondage');

//page enquête people de l'utilisateur
Route::get('/reponses/{hash}',"App\Http\Controllers\PeopleController@displayuserreponse")->name('displayuserreponse');


//---------------------ADMIN------------------------

//Middleware 
Route::middleware('auth')->group(function () {
    //page d'accueil de l'administration + les graphiques controllers
    Route::get('/administration', "App\Http\Controllers\GraphiqueController@index")->name('administrationaccueil');    
    //récupérer le numéro de la question, la question, le type
    Route::get('/administration/question',"App\Http\Controllers\AdminController@tableauquestion")->name('recuperationquestion');
    
    //page reponse utilisateurs + question
    Route::get('/administration/reponse',"App\Http\Controllers\AdminController@recuperationreponsequestion")->name('recupetout');
});
require __DIR__.'/auth.php';


//----------------TEST---------------------
//test dd dump et le comportement dans la vue
Route::get('test',"App\Http\Controllers\TestController@index");
