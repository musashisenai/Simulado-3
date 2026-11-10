<div>
    <h2>Cadastrar Produtos</h2>
    <div class="card-body shadow border-rounded">
    <div class="row">
        <div class="col">
            <form wire:submit='store'>
                <label for="">Nome</label>
                <input type="text" class="form-control" placeholder="Nome" aria-label="nome" wire:model='nome'>
        </div>
        <div class="col">
            <label for="">Descrição</label>
            <input type="text" class="form-control" placeholder="Descrição" aria-label="descricao"
                wire:model='descricao'>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="">Marca</label>
            <input type="text" class="form-control" placeholder="Marca" aria-label="marca" wire:model='marca'>
        </div>
        <div class="col">
            <label for="">Categoria</label>
            <input type="text" class="form-control" placeholder="Categoria" aria-label="categoria"
                wire:model='categoria'>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="">Unidade de Medida</label>
            <input type="number" class="form-control" placeholder="Unidade de Medida" aria-label="unidade_medida"
                wire:model='unidade_medida'>
        </div>
        <div class="col">
            <label for="">Fornecedor</label>
            <input type="text" class="form-control" placeholder="Fornecedor" aria-label="fornecedor"
                wire:model='fornecedor'>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="">Preço de Custo</label>
            <input type="number" class="form-control" placeholder="Preço de Custo" aria-label="preco_custo"
                wire:model='preco_custo'>
        </div>
        <div class="col">
            <label for="">Preço de Venda</label>
            <input type="number" class="form-control" placeholder="Preço de Venda" aria-label="preco_venda"
                wire:model='preco_venda'>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="">Quantidade Disponível</label>
            <input type="text" class="form-control" placeholder="Quantidade Disponível" aria-label="qtd_disponivel"
                wire:model='qtd_disponivel'>
        </div>
        <div class="col">
            <Label>Quantidade Miníma</Label>
            <input type="text" class="form-control" placeholder="Quantidade Miníma" aria-label="qtd_minima"
                wire:model='qtd_minima'>
        </div>
    </div>
    
    <div class="col-12">
        <button type="submit" class="btn-solid theme-primary">Enviar</button>
    </div>
    </form>
    <div class="col-12">
        <a href="/produtos" class="btn border-rounded theme-danger btn-solid btn-styled">Voltar</a>
</div>
    </div>
</div>
