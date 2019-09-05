<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    
                    
                    <div class="card-header"><strong>Productos</strong></div>

                    <div class="card-body">
                        <a href="products/create" target="_blank">
                    <button type="button"  class="btn btn-success">Agregar un nuevo producto</button>
                    </a>
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
                                           size="1" v-model="cant">
                                    <button type="button" class="btn btn-primary btn-sm">Agregar al carrito</button>
                                </td>
                                </tr>
                                                           
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                users:[]
            }
        },
        mounted() {
            this.getProducts()

        },
        methods:{
            getProducts(){
                axios.get('/api/products').then(response=>{
                    console.log(response)
                    this.users=response.data
                })
            }
        }
    }
</script>
