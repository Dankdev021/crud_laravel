
<div class="container mt-5">
    <a class="btn btn-primary btn-lg" href="/series/criar" role="button">Adicionar Série</a>
    <ul class="list-group mt-3">
        @foreach($series as $serie)
        <li class="list-group-item">{{$serie}}</li>
        @endforeach
    </ul>
</div>