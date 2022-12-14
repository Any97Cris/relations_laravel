<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;

//Listar Dados User
Route::get('/users', [UserController::class, 'index']);
//Buscar Dados User
Route::get('/users/{id}', [UserController::class, 'findOne']);
//Inserir Usuário
Route::post('/users', [UserController::class, 'insert']);

//Listar Endereço
Route::get('/addresses', [AddressController::class, 'index']);
//Buscar Endereço
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);
//Inserir Endereco
Route::post('/addresses', [AddressController::class, 'insert']);

//Listar Invoice
Route::get('/invoice', [InvoiceController::class, 'index']);
//Buscar Invoice
Route::get('/invoice/{id}', [InvoiceController::class, 'findOne']);
//Inserir Invoice
Route::post('/invoice', [InvoiceController::class, 'insert']);
