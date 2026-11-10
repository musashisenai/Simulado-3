<div>
    <h2>Cadastrar Fornecedor</h2>
    <form class="row g-3" wire:submit='store'>
        <div class="md:col-6">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" placeholder="Leonardo" wire:model='nome'>
        </div>
        <div class="md:col-6">
            <label class="form-label">Cpf/CNPJ</label>
            <input type="text" class="form-control" placeholder="49230297810" wire:model='cpf_cnpj'>
        </div>
        <div class="col-12">
            <label class="form-label">Telefone</label>
            <input type="text" class="form-control" placeholder="18981083171" wire:model='telefone'>
        </div>
        <div class="col-12">
            <label class="form-label">Endereço</label>
            <input type="text" class="form-control" placeholder="Rua Guanabara 16-19" wire:model='endereco'>
        </div>
        <div class="md:col-6">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" placeholder="juca@gmail.com" wire:model='email'>
        </div>

        <div class="col-12">
            <button type="submit" class="btn-solid theme-primary">Cadastrar</button>
        </div>
    </form>
            <a href="/fornecedores" class="btn border-rounded theme-danger btn-solid btn-styled">Voltar</a>

</div>
</div>
