@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Stock de productes</h2>
        </div>
        <div>
            <a href="{{route('stocks.create')}}" class="btn btn-primary">Afegir producte</a>
        </div>
    </div>

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>CAS</th>
                <th>Concentració</th>
                <th>Quantitat</th>
                <th>Data d'entrada</th>
                <th>Data de caducitat</th>
            </tr>

            @foreach ($stock as $item)
            <tr>
                <td class="fw-bold">{{$item->CAS}}</td>
                <td>{{$item->Concentracio}}{{$item->Tipus == 'Percentatge' ? '%' : ' mols'}}</td>
                <td>{{$item->Quantitat}} {{substr($item->CAS, -1) == 'S' ? 'g' : 'mL'}}</td>
                <td>{{$item->Data_Entrada}}</td>
                <td>{{$item->Data_Caducitat}}</td>
            </tr>
            @endforeach

        </table>
    </div>
</div>
@endsection
