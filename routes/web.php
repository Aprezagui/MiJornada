<?php

use Illuminate\Support\Facades\Route;


//Direccion de prueba para enviar correo de recuperacion de contraseña
use Illuminate\Support\Facades\Mail;
Route::get('/test-mail', function () {
    Mail::raw('Si puedes leer esto, Mailpit funciona correctamente.', function ($message) {
        $message->to('antoniomsm1@gmail.com')->subject('Test de Mailpit');
    });
    return 'Correo enviado a Mailpit. ¡Revisa localhost:8025!';
});


//Rutas relacionadas con el login
Route::get('/', function () {
    return view('login');
})->name('login');
Route::get('/recuperar-password', function () {
    return view('auth.forgot-password'); // Asegúrate de que el archivo exista en resources/views/auth/forgot-password.blade.php
})->name('password.request');




Route::get('/panel_admin', function () {
    return view('panel_admin');
});