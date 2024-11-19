<template>
  <div>
    <PanoramaViewer panoramaPath="/images/360-background2.png" />
  </div>
</template>

<script>
import PanoramaViewer from "./components/Panorama.vue";

export default {
  name: "App",
  components: {
    PanoramaViewer,
  },
};
</script>
