<template>
    <div>
        <h1>Cuadro de busqueda</h1>
        <input type="text" v-model="post" @change="buscar()">
        <button class="btn" @click="buscar">Buscar</button>
        <label for="">{{post}}</label>

        <div class="card" v-for="post in posts" :key="post.id">
            <div class="card-text">
                <p>{{post.titulo}}</p>
            </div>
        </div>

    </div>
</template>

<script>
import axios from "axios"
     export default {
         data(){
             return{
                 post:'',
                 posts:[]
             }
         },
         methods:{
             buscar(){
                 console.log('done')
                 let me  = this
                axios.get('lista/'+this.post)
                    .then(function (response) {

                        me.posts = response.data
                        console.log(me.posts)
                    })

             }
         },

        mounted() {

        }
    }
</script>

