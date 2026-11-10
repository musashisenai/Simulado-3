<div>
    <h2>Produtos</h2>
    <div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Unidade de Medida</th>
                <th>Preço de Custo</th>
                <th>Preço de Venda</th>
                <th>Quantidade Disponível</th>
                <th>Quantidade Miníma</th>
                <th>Fornecedor</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->descricao }}</td>
                    <td>{{ $p->marca }}</td>
                    <td>{{ $p->unidade_medida}}</td>
                    <td>{{ $p->preco_custo}}</td>
                    <td>{{ $p->preco_venda}}</td>
                    <td>{{ $p->qtd_disponivel}}</td>
                    <td>{{ $p->qtd_minima}}</td>
                    <td>{{ $p->fornecedor_nome}}</td>


                </tr>
            @endforeach
        </tbody>
    </table>
            <a href="/produtos/create" class="btn border-rounded theme-primary btn-solid btn-styled">Cadastrar Produtos</a>

</div>
</div>
