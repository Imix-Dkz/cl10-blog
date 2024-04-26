@extends('adminlte::page')
@section('title', 'CL10 Admin LTE')

@section('content_header')
    <h1>Lista de Categorias</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a class="btn btn-secondary btn-sm" href="{{ route('admin.categories.create') }}">Crear Categoria</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $itemCategory)
                    <tr>
                        <td>{{ $itemCategory->id }}</td>
                        <td>{{ $itemCategory->name }}</td>
                        <td width="10px"><a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit', $itemCategory) }}">Editar</a></td>
                        <td width="10px"><form action="{{ route('admin.categories.destroy', $itemCategory) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop