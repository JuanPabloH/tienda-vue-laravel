@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                                                                                            
        <cart-list-component></cart-list-component>

        <div class="card-body">                        
                            <table class="table table-bordered table-dark">
                                <thead>
                                    <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="user in users" :key="user.id">
                                    <th>{{user.id}}</th>
                                    <td>{{user.name}}</td>
                                    <td>{{user.description}}</td>
                                    <td>{{user.pricing}}</td>
                                    <td>
                                        <input type="number" step="1" max="99" min="1" value="1" 
                                            size="1" v-model="quantity">
                                        <button type="button" class="btn btn-primary btn-sm"  v-on:click="addProductToCart(user.id)">Agregar al carrito</button>
                                    </td>
                                    </tr>
                                                            
                                </tbody>
                                </table>
                        </div>
        
    </div>
</div>
@endsection
