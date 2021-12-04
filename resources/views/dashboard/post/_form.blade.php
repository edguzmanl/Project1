@csrf
@include('dashboard.partials.validation-errors')

<div class="form-group">
    <input class="form-control" type="text" name="publication" id="publication" 
    placeholder="Nombre publicación" value="{{ old("publication",$post -> publication) }}">
</div>
<div class="form-group">
    <select class="form-control" name="state" id="state" value="{{ old("state",$post -> state) }}">
        <option value="">Publicado</option>
        <option value="">Rechazado</option>
        <option value="">Revisión</option>
        <option value="">Recibido</option>
    </select>
</div>
<div class="form-group">
    <textarea class="form-control" name="description" id="description" cols="30" rows="10">
        {{ old("description",$post -> description) }}
    </textarea>
</div>
<button type="submit" class="btn btn-success">Guardar</button>
<a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar</a>

