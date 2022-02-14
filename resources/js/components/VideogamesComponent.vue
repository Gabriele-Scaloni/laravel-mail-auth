<template>
    <div id="videogames">

        <h2>Videogames List</h2>
        <table>
            <tr>
                <th>titolo</th>
                <th>sottotitolo</th>
                <th>rating</th>
            </tr>
            <tr v-for="videogame in videogames" :key='videogame.id'>
                <td>{{videogame.titolo}}</td>
                <td>{{videogame.sottotitolo}}</td>
                <td>{{videogame.rating}}</td>
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

    mounted() {
        axios.get('api/videogames/list')
            .then(r => this.videogames = r.data)
            .catch(e =>console.error(e));
    }
}
</script>
