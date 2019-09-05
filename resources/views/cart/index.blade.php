@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                                                                                            
        <cart-list-component></cart-list-component>
        
        <div class="card-body">           
                            <table class="table table-bordered table-dark">
                                <thead>
                                    <tr>                                    
                                    <th scope="col">Producto</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Total</th>                                    
                                    </tr>
                                </thead>
                                
                                <tbody>
                                @foreach($products_carts as $prod)

                                    @php
                                    $producto=App\Product::find($prod->id_product)
                                    @endphp
                                    <tr>
                                    <th>{{$producto->name}}</th>
                                    <td>{{$prod->quantity}}</td>
                                    <th>{{$prod->total}}</th>                                
                                    <td>
                                    
                                    </td>
                                    </tr>
                                @endforeach                           
                                </tbody>
                                
                                </table>
                        </div>
        
    </div>
</div>
{!!$products_carts->render()!!}
@endsection
