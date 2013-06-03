@extends('layout')

@section('content')
  <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Adicionar Novo</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Título</th>
        <th>Postado em</th>
        <th>Atualizado em</th>
      </tr>
    </thead>
    <tbody>
      @if(empty($entities))
      <tr>
        <td colspan="4">Nenhum post cadastrado.</td>
      </tr>
      @else
        @foreach($entities as $entity)
        <tr>
          <td>{{ $entity->id }}</td>
          <td>{{ $entity->titulo }}</td>
          <td>{{ $entity->created_at->format('d-m-Y H:i') }}</td>
          <td>{{ $entity->updated_at->format('d-m-Y H:i') }}</td>
        </tr>
        @endforeach
      @endif
    </tbody>
  </table>
@stop
