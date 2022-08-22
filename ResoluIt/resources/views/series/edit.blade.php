<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<x-layout title="Editar Série '{{ $serie->nome }}'">
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" />
</x-layout>
