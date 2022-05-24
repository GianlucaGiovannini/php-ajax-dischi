<template>
  <header>
    <div class="container-fluid py-3">
        <LogoComponent />
    </div>
  </header>
</template>

<script>
import LogoComponent from "@/components/LogoComponent.vue"
export default {
  name: "SiteHeader",
  components: {
      LogoComponent
  }
};
</script>

<style lang="scss" scoped>
header {
    background-color: rgb(255 255 255 / 7%);
}
</style>