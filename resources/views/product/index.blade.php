@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Taula de productes</h2>
        </div>
        <div>
            <a href="{{route('products.create')}}" class="btn btn-primary">Afegir CAS nou</a>
        </div>
    </div>

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>CAS</th>
                <th>Nom</th>
                <th>FDS</th>
            </tr>

            @foreach ($products as $product)
            <tr>
                <td class="fw-bold">{{$product->CAS}}</td>
                <td>{{$product->Nom}}</td>
                <td>{{$product->FDS}}</td>
            </tr>
            @endforeach

        </table>
    </div>
</div>
@endsection
