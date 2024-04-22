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
                    <input type="text" class="form-control" name="CAS" placeholder="CAS..." maxlength="13" pattern="[A-Za-z\s]+">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Concentracio:</strong>
                    <input type="number" class="form-control" name="concentracio" placeholder="Concentracio..." min="0" max="100" step="0.01">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Conc. Tipus:</strong>
                    <select name="status" class="form-select" id="">
                        <option value="Percentatge">Percentatge</option>
                        <option value="Mols">Mols</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Quantitat:</strong>
                    <input type="number" class="form-control" name="quantitat" placeholder="Quantitat...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Motiu:</strong>
                    <select name="status" class="form-select" id="">
                        <option value="Practica">Pràctica</option>
                        <option value="Regularitzacio">Regularització</option>
                        <option value="Altres">Altres</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection
