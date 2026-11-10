<div>
    <h2>Fornecedores</h2>
    <div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF/CNPJ</th>
                <th>telefone</th>
                <th>Endereço</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($fornecedores as $f)
                <tr>
                    <td>{{ $f->id }}</td>
                    <td>{{ $f->nome }}</td>
                    <td>{{ $f->cpf_cnpj }}</td>
                    <td>{{ $f->telefone }}</td>
                    <td>{{ $f->endereco}}</td>
                    <td>{{ $f->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        <a href="/fornecedores/create" class="btn border-rounded theme-primary btn-solid btn-styled">Cadastrar Fornecedores</a>

</div>

</div>
