<?php

namespace App\Livewire;

use App\Models\Fornecedor;
use Livewire\Component;

class FornecedorIndex extends Component
{
    public function render()
    {
        $fornecedores = Fornecedor::all();
        return view('livewire.fornecedor-index', compact('fornecedores'));
    }
}
