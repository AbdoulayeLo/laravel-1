<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/App', function () {
    return view('Layouts/App');
});
Route::get('/Permis', function () {
    return view('Admin/Permis');
});
Route::get('/VoitureDispo', function () {
    return view('Voiture/VoitureDispo');
});
Route::get('/VoitureInDispo', function () {
    return view('Voiture/VoitureInDispo');
});
Route::get('/VoitureHorsService', function () {
    return view('Voiture/VoitureHorsService');
});
Route::get('/Login', function () {
    return view('Securiter/register');
});
Route::get('/Register', function () {
    return view('Securiter/register');
});
Route::get('/Detaille', function () {
    return view('Voiture/DetailVoiture');
});
Route::get('/En Attente', function () {
    return view('Reservations/En attente');
});
Route::get('/Valider', function () {
    return view('Reservations/valider');
});
Route::get('/gesChauffeurs', function () {
    return view('Admin/chauffeur');
});
Route::get('/ContratChauffeur', function () {
    return view('Admin/ContratChauffeur');
});