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
    
    //page enquête de satisfaction
    Route::get('/formulaire',"App\Http\Controllers\PeopleController@getquestion")->name('formulairesatisfaction');
    
    //poster l'enquête de satisfaction
    Route::post('/formulaire',"App\Http\Controllers\PeopleController@postanswer")->name('envoisondage');
    
    //page enquête people de l'utilisateur
    Route::get('/reponses/{hash}',"App\Http\Controllers\PeopleController@displayuserreponse")->name('displayuserreponse');
    


    //test dd dump et le comportement dans la vue
    Route::get('test',"App\Http\Controllers\TestController@index");


      
    //s'inscrire à l'administration (bonus car pas demandé)
    Route::get('/administration/inscription', function()  {
        return view("administration.inscription");   
            })->name("administrationinscription");
    Route::post('/administration/inscription',"App\Http\Controllers\AdminController@inscription")->name("administrationinscription");
       
    //se connecter à l'administration
    Route::get('/administration/connexion', function () {
        return view("administration.connexion");
            })->name('administrationconnexion');
    Route::post('administration/accueil',"App\Http\Controllers\AdminController@connexion")->name("adminconnect");    
    


    //page d'accueil de l'administration + les graphiques controllers
    Route::get('/administration/accueil', function () {
        return view("administration.accueil");
            })->name('administrationaccueil');
    
    


    //page questions de l'administration
    //Route::get('/administration/question',"App\Http\Controllers\AdminController@recuperationnumeroquestiontype")->name('recuperationquestion');
    
    //récupérer le numéro de la question, la question, le type
    Route::get('/administration/question',"App\Http\Controllers\AdminController@tableauquestion")->name('recupetout');






    //page reponse utilisateurs + question
    Route::get('/administration/reponse',"App\Http\Controllers\AdminController@recuperationquestion")->name('recuperationquestion');
    Route::get('/administration/reponse',"App\Http\Controllers\AdminController@recuperationreponse")->name('recuperationreponse');
    
    
    //radarchart
    Route::get('/administration/radar', function () {
        return view("administration.graphique.graphd");
            })->name('bal');
    
    //page réponses de l'administration
    
    //bouton déconnexion de l'administration (bonus pas demandé)
