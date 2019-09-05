@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
                
                
                       
                                                                                        
        <product-component :products="{{ json_encode($products) }}"></product-component> 

        <add-product-component></add-product-component>   
                
            
        
    </div>
</div>
@endsection
