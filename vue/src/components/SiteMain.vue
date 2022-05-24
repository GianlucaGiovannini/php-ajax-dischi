<template>
  <main>
      <SelectGender v-model="selectValue" @changeSelectValue="changeState" />
      <!-- per prendere il v-model devo fare @input="$emit('input', $event.target.value)" -->
      <!-- per passare l'evento @changeSelectValue devo fare così @change="$emit('changeSelectValue')"-->
      <DiscList />
  </main>
</template>

<script>
import DiscList from "@/components/DiscListComponent.vue"
import SelectGender from "@/components/SelectGenderComponent.vue"
import state from '@/state.js';
/* importo il file state che è globale */

export default {
  name: "SiteMain",
  components: {
      DiscList,
      SelectGender
  },
  data() {
    return {
      selectValue: ""
    }
  },
  methods: {
    changeState(){
      // console.log(this.selectValue)
      state.selectValue = this.selectValue;
      // console.log(state)
    }
  },
};
</script>

<style lang="scss" scoped>
</style>