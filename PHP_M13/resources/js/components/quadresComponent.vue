<template>
    <table class="table table-borderless table-striped table-earning">
    <thead>
        <tr class="">
            <th>Add Book</th>
            <th>Delete All Books</th>
        </tr>
    </thead>
    <tbody>
        <tr class="">
            <td><button class="btn btn-primary">Add Book</button></td>
            <td><button class="btn btn-primary">Delete All Books</button></td>
        </tr>
    </tbody>
</table>

<div class="table-responsive m-b-40">
<table class="table table-borderless table-striped table-earning">
    <thead>
        <tr class="">
            <th>Book ID</th>
            <th>Autor</th>
            <th>Book Name</th>
            <th class="col-3" style="width: 20%;">Description</th>
            <th class="">Shop ID</th>
        </tr>
    </thead>
    <tbody>
        <tr class="" v-for="quadres in quadre" :key="quadres.id">
            <td>{{quadres.id}}</td>
            <td>{{quadres.nomAutor}}</td>
            <td class="col-2">{{quadres.nom}}</td>
            <td class="col-2" style="width: 50px;">{{quadres.describe}}</td>
            <td>{{quadres.idBotiga}}</td>
        </tr>
    </tbody>
</table>
</div>
</template>

<script>
import botigasComponent from  './botigasComponent'



export default {
     components: {
            botigasComponent

        },
    data(){
        return{
            quadre:[
            {
                id: '1',
                nomAutor: 'sii',
                nom: 'asjf',
                describe: '',
                idBotiga: '4'

            },
            {
                id: '2',
                nomAutor: 'ADSF',
                nom: 'SIIINOO',
                describe: '',
                idBotiga: '7'

            }
            ]
        }
    },
    methods:{

    }
    ,

    mounted(){
        axios.get('/api/quadres/').then((response) => {
            console.log(response);
            this.quadre = response.data.quadre
        });
    }

}
</script>
<style>

</style>
