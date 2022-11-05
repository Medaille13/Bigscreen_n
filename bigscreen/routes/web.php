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
    return redirect()->route("ConnexionAdm");
});    

//se connecter à l'administration
Route::get('/administration/connexion', function () {
    return view("Admin\connexion.admin");
})->name('ConnexionAdm');

Route::post('administration/accueil',"App\Http\Controllers\AdminController@read")->name("adminlogin");    

Route::get('test',"App\Http\Controllers\TestController@index");


//page d'accueil de l'administration + les graphiques controllers

//page questions de l'administration

//page réponses de l'administration

//bouton déconnexion de l'administration (bonus pas demandé)
