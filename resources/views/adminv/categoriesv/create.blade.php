@extends('adminlte::page')
@section('title', 'CL10 Admin LTE')

@section('content_header')
    <h1>Crear nueva categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}

                    <!--//Se añaden mensajes de error de validación-->
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div><div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoria', 'readonly'] ) !!}

                    <!--//Se añaden mensajes de error de validación-->
                    @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {!! Form::submit('Crear categoria', ['class' => 'btn btn-primary']) !!}
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
