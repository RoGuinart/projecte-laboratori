@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Actaulització d'stock</h2>
        </div>
        <div>
            <a href="{{route('stocks.index')}}" class="btn btn-primary">Tornar</a>
        </div>
    </div>

    <form action="{{route('stocks.update', $stock)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>CAS:</strong>
                    <p class="form-control" name="CAS">{{$stock->CAS}}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Concentracio:</strong>
                    <p class="form-control" name="Concentracio">{{$stock->Concentracio}}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Conc. Tipus:</strong>
                    <p name="Tipus" class="form-control">{{$stock->Tipus}}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Data d'entrada:</strong>
                    <p name="Data_Entrada" class="form-control">{{$stock->Data_Entrada}}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Data de caducitat:</strong>
                    <p name="Data_Caducitat" class="form-control">{{$stock->Data_Caducitat}}</p>
                </div>
            </div>
            <br/><br/>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Quantitat (mL/g):</strong>
                    <input type="number" class="form-control" name="Quantitat" placeholder="{{$stock->Quantitat}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualitzar</button>
            </div>
        </div>
    </form>
</div>
@endsection
