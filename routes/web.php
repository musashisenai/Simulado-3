<?php

use App\Livewire\FornecedorCreate;
use App\Livewire\FornecedorIndex;
use App\Livewire\Login;
use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)
    ->name('login');

Route::get('/produtos', ProdutoIndex::class)
    ->name('produto.index');

Route::get('/produtos/create', ProdutoCreate::class)
    ->name('produto.create');

Route::get('/fornecedores/create', FornecedorCreate::class)
    ->name('fornecedor.create');

Route::get('/fornecedores', FornecedorIndex::class)
    ->name('fornecedor.index');
