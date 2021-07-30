<template>




                        <li >
                             <a v-on:click="botiga(botigas.id)">{{botigas.nom}}</a>
                        </li>


</template>
<script>
export default {
    props: {
        botigas: {
            type: Object,
            required: true
        }
    },
    data(){
        return{

        }

    },
    methods:{
      botiga(botigas){
            this.emit('update-quadres', botigas)
       }




    }/*,
     mounted(){
        axios.get('/api/botiga').then((response) => {
            console.log(response);
            this.botiga = response.data.botiga
        });
     }*/

}
</script>
<style>

</style>
