<template>
  <section v-if="!loading">
    <div class="container">
      <div
        class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
        <DiscItem :album="album" v-for="(album, index) in filteredDisc" :key="index" />
      </div>
    </div>
  </section>
  <section v-else class="d-flex align-items-center justify-content-center min-vh-100">
    <Loader />
  </section>
</template>

<script>
import axios from "axios";
import DiscItem from "@/components/DiscItemComponent.vue";
import Loader from "@/components/LoaderComponent.vue";
import state from "@/state";
/* importo il file state che è globale */

export default {
  name: "DiscListComponent",
  components: {
    DiscItem,
    Loader,
  },
  data() {
    return {
      API_URL: "http://localhost/PHP/php-ajax-dischi/php/db.php",
      discs: null,
      loading: true,
      /* error: null,  <-- non serve perché ho messo un setTimout per far vedere il caricamento*/ 
    };
  },
  methods: {
    timer() {
      setTimeout(() => {
        this.loading = false
      }, 2500);
    },

    callApi() {
      axios
        .get(this.API_URL)
        .then((response) => {
          this.discs = response.data.response;
          /* this.loading = false; */
        })
        .catch((error) => {
          console.error(error);
          /* this.error = `Sorry There is a Problem! ${error}`; */
        });
    },
  },
  mounted() {
    this.callApi();
    this.timer();
  },
  computed: {
    filteredDisc(){
      return this.discs.filter(disc =>{
        return disc.genre.toLowerCase().includes(state.selectValue.toLowerCase())
      })
    }
  }
};
</script>

<style lang="scss" scoped>

</style>