@extends('adminlte::page')
@section('title', 'CL10 Admin LTE')

@section('content_header')
    <h1>Crear nueva Etiqueta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.tags.store']) !!}
                {{-- //Se añade un formulario/vista parcial --}}
                @include('adminv.tagsv.partials.form')
                {!! Form::submit('Crear Etiqueta', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('admin.tags.index') }}" class="btn btn-secondary">Volver al listado de etiquetas</a>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <!--//Se añade script/libreria para convertir una cadena a slug en tiempo real -->
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <!--//Para activarlo, hay que ingresar el siguiente código apuntador al input -->
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug', //Old, #permalink
                space: '-'
            });
        } );
    </script>
@stop
