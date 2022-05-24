<template>
    <div class="loader"></div>
</template>

<script>
export default {
    name: "LoaderComponent"
}
</script>

<style lang="scss" scoped>
.loader {
  position: relative;
  color: white;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: linear-gradient(45deg, transparent, transparent 40%, #e5f403);
  animation: animate 2s linear infinite;
}
/* Loader Animation */
@keyframes animate {
  0% {
    transform: rotate(0deg);
    filter: hue-rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
    filter: hue-rotate(360deg);
  }
}
/* Loader Pseudo Elements */
.loader:before {
  content: "";
  position: absolute;
  top: 6px;
  left: 6px;
  right: 6px;
  bottom: 6px;
  background: #333;
  border-radius: 50%;
  z-index: 999;
}
.loader:after {
  content: "";
  position: absolute;
  top: 0px;
  left: 0px;
  right: 0px;
  bottom: 0px;
  background: linear-gradient(45deg, transparent, transparent 40%, #e5f403);
  border-radius: 50%;
  z-index: 999;
  z-index: 1;
  filter: blur(20px);
}
</style>