@extends('dashboard.master')
@section('content')
<div class="form-group">
    <input readonly class="form-control" type="text" name="publication" id="publication" 
    placeholder="Nombre publicación" value="{{ $post -> publication }}" >
</div>
<div class="form-group">
    <select readonly class="form-control" name="state" id="state" value="{{ $post -> state }}">
        <option value="">Publicado</option>
        <option value="">Rechazado</option>
        <option value="">Revisión</option>
        <option value="">Recibido</option>
    </select>
</div>
<div class="form-group">
    <textarea readonly class="form-control" name="description" id="description" cols="30" rows="10">
        {{ $post -> description }}
    </textarea>
</div>
<button type="submit" class="btn btn-success">Guardar</button>
<a href="" class="btn btn-danger">Cancelar</a>

 
@endsection