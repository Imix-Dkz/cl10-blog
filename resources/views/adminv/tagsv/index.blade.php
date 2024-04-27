@extends('adminlte::page')
@section('title', 'CL10 Admin LTE')

@section('content_header')
    <h1>Lista de Etiquetas</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <b>{{ session('info') }}</b>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary btn-sm" href="{{ route('admin.tags.create') }}">Crear Etiquetas</a>
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
                    @foreach ($tags as $itemTag)
                        <tr>
                            <td>{{ $itemTag->id }}</td>
                            <td>{{ $itemTag->name }}</td>
                            <td width="10px"><a class="btn btn-primary btn-sm" href="{{ route('admin.tags.edit', $itemTag) }}">Editar</a></td>
                            <td width="10px"><form action="{{ route('admin.tags.destroy', $itemTag) }}" method="POST">
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