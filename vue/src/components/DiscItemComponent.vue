<template>
  <div class="col text-center p-4">
    <div class="album h-100 p-3">
      <div class="img_album">
        <img :src="album.poster" :alt="'album ' + album.title" />
      </div>
      <h3 class="py-3">{{ album.title }}</h3>
      <div class="info">
        <div class="author">
          {{ album.author }}
        </div>
        <div class="year">
          {{ album.year }}
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "DiscItemComponent",
  props: {
    album: Object,
  },
};
</script>

<style lang="scss" scoped>
.album {
  background-color: $bgTransparent;
  h3 {
    color: white;
    font-size: 1.4rem;
  }
  .info {
    color: $albumTextColor;
  }
}
</style>