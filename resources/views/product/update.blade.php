@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Actaulització de producte</h2>
        </div>
        <div>
            <a href="{{route('products.index')}}" class="btn btn-primary">Tornar</a>
        </div>
    </div>

    <form action="{{route('products.update', $product)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>CAS:</strong>
                    <p class="form-control" name="CAS">{{$product->CAS}}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input type="text" class="form-control" name="Nom" placeholder="{{$product->Nom}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>FDS:</strong>
                    <input type="text" class="form-control" name="FDS" placeholder="FDS" value={{$product->FDS}}>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualitzar</button>
            </div>
        </div>
    </form>
</div>
@endsection
