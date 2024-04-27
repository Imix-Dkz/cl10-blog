<div class="form-group">
    <!-- //Cuando se usa un formulario con laravelcollective, no es necesario usar el "@ crlf", ya que Laravel ya lo hace -->
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}
    <!--//Se añaden mensajes de error de validación-->
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div><div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la etiqueta', 'readonly'] ) !!}
    <!--//Se añaden mensajes de error de validación-->
    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div><div class="form-group">
    <label for="">Color:</label>
    {{-- //Esta seria una forma normal de hacer un select, de color...
        <select name="color" id="" class="form-control">
            <option value="red">Color Rojo</option>
            <option value="green">Color Verde</option>
            <option value="blue">Color Verde</option>
        </select> 
    --}}
    <!-- //Pero lo haremos mejor con laravelcollective -->
    {!! Form::label('color', 'Color:') !!} 
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}                
</div>