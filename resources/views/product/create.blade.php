@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Crear Tarea</h2>
        </div>
        <div>
            <a href="{{route('products.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>CAS:</strong>
                    <input type="text" class="form-control" name="CAS" placeholder="CAS..." maxlength="13" pattern="[0-9]{2,7}-[0-9]{2}-[0-9][SLsl]">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input type="text" class="form-control" name="Nom" placeholder="Nom...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>FDS:</strong>
                    <input type="text" class="form-control" name="FDS" placeholder="FDS...">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection
