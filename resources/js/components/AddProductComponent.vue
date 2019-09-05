<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Agregar Producto</strong></div>

                    <div class="card-body">
                        <form action="/products" method="post">
                            <div class="form-group">
                                <label for="photo">Foto</label>
                                <input type="text" class="form-control" id="photo" placeholder="Link de foto" v-model="photo">
                                
                            </div>
                            <div class="form-group">
                                <label for="name">Nombre de producto</label>
                                <input type="text" class="form-control" id="name" placeholder="Nombre de producto" v-model="name">
                            </div>
                             <div class="form-group">
                                <label for="description">Descripción:</label>
                                <textarea class="form-control" rows="3" id="description" placeholder="Descripción del producto" v-model="description"></textarea>
                            </div> 
                            <div class="form-group">
                                <label for="pricing">Precio:</label>
                                <input type="text" class="form-control" id="pricing" placeholder="Precio del producto"  v-model="pricing">
                            </div>
                            
                            <button type="button" class="btn btn-primary" v-on:click="addNewProduct">Agregar Producto</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                photo:'',
                name:'',
                description:'',
                pricing:''
            }

        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            addNewProduct(){

                
                //Send data to APi
                axios.post('/api/products',{
                    photo:this.photo,
                    name:this.name,
                    description:this.description,
                    pricing:this.pricing
                }).then(response=>{
                    console.log(response)

                    this.photo='',
                    this.name='',
                    this.description='',
                    this.pricing=''
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
</script>
