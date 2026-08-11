<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PortfolioController::class, 'exibirPaginaInicial'])->name('home');
Route::get('/projetos/{slug}', [PortfolioController::class, 'exibirProjeto'])->name('projects.show');
