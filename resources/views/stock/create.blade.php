@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Afegir a l'stock</h2>
        </div>
        <div>
            <a href="{{route('stocks.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <form action="{{route('stocks.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>CAS:</strong>
                    <input type="text" class="form-control" name="CAS" placeholder="CAS..." maxlength="13" pattern="[0-9]{2,7}-[0-9]{2}-[0-9][SLsl]">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Concentracio:</strong>
                    <input type="number" class="form-control" name="Concentracio" placeholder="Concentracio..." min="0" max="100" step="0.01">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Conc. Tipus:</strong>
                    <select name="Tipus" class="form-select" id="">
                        <option value="Percentatge">Percentatge</option>
                        <option value="Mols">Mols</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Quantitat (mL/g):</strong>
                    <input type="number" class="form-control" name="Quantitat" placeholder="Quantitat...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Data d'entrada:</strong>
                    <input type="date" class="form-control" name="Data_Entrada"/>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Data de caducitat:</strong>
                    <input type="date" class="form-control" name="Data_Caducitat"/>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection
