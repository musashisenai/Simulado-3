<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $descricao;
    public $marca;
    public $categoria;
    public $unidade_medida;
    public $preco_custo;
    public $preco_venda;
    public $qtd_disponivel;
    public $qtd_minima;
    public $fornecedor_id;

    public function store()
    {
        Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'marca' => $this->marca,
            'categoria' => $this->categoria,
            'unidade_medida' => $this->unidade_medida,
            'preco_custo' => $this->preco_custo,
            'preco_venda' => $this->preco_venda,
            'qtd_disponivel' => $this->qtd_disponivel,
            'qtd_minima' => $this->qtd_minima,
            'fornecedor_id' => $this->fornecedor_id,
        ]);

        session()->flash(
            'success',
            'Produto cadastrado com sucesso!'
        );
        return redirect()->route('produtos.index');
    }
    public function render()
    {
        return view('livewire.produto-create');
    }
}
