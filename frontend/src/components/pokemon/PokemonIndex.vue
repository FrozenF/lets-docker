<template>
  <div class="pokemon">
    <div class="container">
      <table class="table table-bordered">
        <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="poke in pokemon" :key="poke.id">
          <th scope="row">{{ poke.id }}</th>
          <td>{{ poke.name }}</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {

  data() {
    return {
      pokemon: []
    }
  },
  created() {
    axios.get(process.env.VUE_APP_API + '/pokemon').then(response => {
      this.pokemon = response.data.data;
    });
  }
}
</script>