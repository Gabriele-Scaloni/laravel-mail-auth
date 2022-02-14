<template>
    <div id="videogames">

        <h2>Videogames List</h2>
        <table >
            <tr>
                <th>ID</th>
                <th>titolo</th>
                <th>sottotitolo</th>
                <th>rating</th>
                <th v-if="user">azione</th>

            </tr>
            <tr v-for="videogame in videogames" :key='videogame.id'>
                <td>{{videogame.id}}</td>
                <td>{{videogame.titolo}}</td>
                <td>{{videogame.sottotitolo}}</td>
                <td>{{videogame.rating}}</td>
                <td v-if="user"> 
                    <a class="btn-danger" :href="`/api/videogame/delete/${videogame.id}`"> Delete </a> 
                    <!-- bisogn usare i backtick per aggiungere la rotta all'id -->
                </td>

            </tr>
        </table>

    </div>
</template>
<script>

export default {

    data: function() {

        return {

            videogames: []
        };
    },
    props: {
        user: String //mi serve per sapere se siamo loggati o meno. se non sono loggato mi arriva una empy string
        //se invece sono loggati mi arriva la stringa 
    },
    mounted() {
        axios.get('api/videogames/list') //chiamo axios per popolarmi l'array
            .then(r => this.videogames = r.data)
            .catch(e =>console.error(e));
    }
}
</script>
