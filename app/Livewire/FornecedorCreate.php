<?php

namespace App\Livewire;

use App\Models\Fornecedor;
use Livewire\Component;

class FornecedorCreate extends Component
{
    public $nome;
    public $cpf_cnpj;
    public $telefone;
    public $endereco;
    public $email;

        public function store()
    {
        Fornecedor::create([
            'nome' => $this->nome,
            'cpf_cnpj' => $this->cpf_cnpj,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco,
            'email' => $this->email,
        ]);

        session()->flash(
            'success',
            'Fornecedor cadastrado com sucesso!'
        );
        return redirect()->route('fornecedor.index');
    }

    public function render()
    {
        
        
        return view('livewire.fornecedor-create');
    }
}
