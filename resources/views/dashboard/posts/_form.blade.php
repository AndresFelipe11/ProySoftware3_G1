{{--falsificacion de peticiones en sitios cruzados--}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input class="form-control" type="text" name="publication" id="publication" placeholder="Nombre publicacion"
        value="{{old('publication',$post-> publication )}}">
</div>
<div class="form-group">
    <select class="form-control" name="state_publication" id="state_publication">
        <option value="">publicado</option>
        <option value="">No publicado</option>
        <option value="">En revision</option>
    </select>
</div>
<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
        placeholder="contenido de la publicacion" value="{{old('content_publication',$post-> content_publication )}}">
    </textarea>
</div>
<button type="submit" class="btn btn-success">Aceptar</button>
<button class="btn btn-danger" href="{{ URL::previous()}}">Cancelar</button>