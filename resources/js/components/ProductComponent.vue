<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    
                    
                    <div class="card-header"><strong>Productos</strong></div>

                    <div class="card-body">
                        <a href="products/create">
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
                                <tr v-for="user in users">
                                <th>{{user.id}}</th>
                                <td>{{user.name}}</td>
                                <td>{{user.description}}</td>
                                <td>{{user.pricing}}</td>
                                <td>Agregar al carrito</td>
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
