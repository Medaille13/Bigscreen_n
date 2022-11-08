<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Page d'accueil du site
//Route::get('/accueil', function (){
    //  return view('')
    //});
    
    //Page sondage pour les sondés + rajout à la fin du message de remerciement
    
    //Récupération de l'url hashé
    
    //Récupération des questions et réponses affichées sur une autre page
    
    
    //page enquête
    Route::get('/formulaire',"App\Http\Controllers\PeopleController@getquestion")->name('formulairesatisfaction');
    //poster l'enquête
    Route::post('/formulaire',"App\Http\Controllers\PeopleController@postanswer")->name('envoisondage');
    
    //page enquête people
    Route::get('/formulaire/{hash}',"App\Http\Controllers\PeopleController@getuserquestion")->name('getuserquestion');
    
    //test dd etc..
    Route::get('test',"App\Http\Controllers\TestController@index");
    
    //
    
    
    
    
    
    
    //s'inscrire à l'administration (bonus car pas demandé)
    Route::post('/administration/inscription',"App\Http\Controllers\AdminController@inscription")->name("AdminInscription");
    Route::get('/administration/inscription', function()  {
        return view("Administration\inscription.admin");   
    })->name("InscriptionAdminPage");
    
    Route::post('/inscription', function(){        
        request()->validate([
            'username' => ['required','text'],
            'password' => ['required'],
        ]);    
        $admin = new App\Models\AdminUser();
        $admin -> username = request ('username');
        $admin -> password = sha1(request ('password'));
        //insertion en base de données
        $admin -> save();    
        return redirect()->route("connexionadmin");
    });    
    
    
    
    
    
    //se connecter à l'administration
    Route::get('/administration/connexion', function () {
        return view("administration.connexion");
    })->name('connexionadmin');
    
    Route::post('administration/accueil',"App\Http\Controllers\AdminController@read")->name("adminlogin");    
    
    
    //page d'accueil de l'administration + les graphiques controllers
    Route::get('/administration/accueil', function () {
        return view("administration.accueil");
    })->name('connexionadmin');
    
    
    //page questions de l'administration
    Route::get('/administration/question',"App\Http\Controllers\AdminController@recuperationquestion")->name('recuperationquestion');
    
    //page reponse utilisateurs + question
    Route::get('/administration/question',"App\Http\Controllers\AdminController@recuperationreponse")->name('recuperationquestion');
    Route::get('/administration/reponse',"App\Http\Controllers\AdminController@recuperationreponse")->name('recuperationreponse');
    
    
    
    
    //page réponses de l'administration
    
    //bouton déconnexion de l'administration (bonus pas demandé)
