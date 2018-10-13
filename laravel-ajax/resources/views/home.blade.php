@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel Administrativo</div>

                <div class="panel-body">
                    <p>

                   <span id="products-total" >{{ $products->total()}} </span>
                    registros |
                    pagina {{$products->currentpage()}}
                    de {{$products->lastpage()}}
                    </p>
                    <div id="alert" class="alert alert-info">
                    <table class="table table-hover table-strip">
                    <thead>
                    <tr>
                    <th width="20px">ID </th>
                    <th>Nombre del Producto</th>
                    <th>&nbsp;<th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $item)
                    <tr>
                    <td width='20px'>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td width='20px'></td>
                    </tr>
                
                    @endforeach
                    </tbody>
                    </table>
                    {!!$products->render()!!}

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
