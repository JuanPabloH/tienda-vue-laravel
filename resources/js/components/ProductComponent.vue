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
                                <tr v-for="product in products" :key="product.id">
                                <th>{{product.id}}</th>
                                <td>{{product.name}}</td>
                                <td>{{product.description}}</td>
                                <td>{{product.pricing}}</td>
                                <td>
                                    <input type="number" step="1" max="99" min="1" value="1" 
                                           size="1" v-model="quantity">
                                    <button type="button" class="btn btn-primary btn-sm"  v-on:click="addProductToCart(product.id)">Agregar al carrito</button>
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
                products:[],

                quantity:'',
                id_product:''
            }
        },
        mounted() {
            this.getProducts()

        },
        methods:{
            addProductToCart(id){                
                console.log(this.quantity)
                this.id_product=id
                console.log(this.id_product)
                //Send data to APi
                axios.post('/api/productCarts',{
                    quantity:this.quantity,
                    id_product:this.id_product                   
                }).then(response=>{
                    console.log(response)

                }).catch(error=>{
                    console.log(error)
                })

            },
            getProducts(){
                axios.get('/api/products').then(response=>{
                    console.log(response)
                    this.products=response.data
                })
            }
        }
    }
</script>
