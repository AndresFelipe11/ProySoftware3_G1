@extends('dashboard.master')
@section('content')
<div class="form-group">
    <input readonly class="form-control" type="text" name="publication" id="publication"
        placeholder="Nombre publicacion" value="{{old('publication',$post-> publication )}}">
</div>
<div class="form-group">
    <select disabled class="form-control" name="state_publication" id="state_publication">
        <option value="">publicado</option>
        <option value="">No publicado</option>
        <option value="">En revision</option>
    </select>
</div>
<div class="form-group">
    <textarea readonly class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
        placeholder="contenido de la publicacion" value="{{old('content_publication',$post-> content_publication )}}">
    </textarea>
</div>

<button class="btn btn-danger" href="{{ URL::previous()}}">Aceptar</button>
@endsection