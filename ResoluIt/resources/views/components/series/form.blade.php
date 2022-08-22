<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<form action="{{ $action }}" method="post">
    @csrf

    @isset($nome)
    @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text"
               id="nome"
               name="nome"
               class="form-control"
               @isset($nome)value="{{ $nome }}"@endisset>
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
