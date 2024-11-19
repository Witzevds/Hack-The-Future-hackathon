<template>
  <div id="panorama" style="width: 100%; height: 100vh"></div>
</template>

<script>
import { onMounted } from "vue";

export default {
  name: "PanoramaViewer",
  props: {
    panoramaPath: {
      type: String,
      required: true,
    },
  },
  setup(props) {
    onMounted(() => {
      if (typeof pannellum !== "undefined") {
        pannellum.viewer("panorama", {
          type: "equirectangular",
          panorama: props.panoramaPath,
          autoLoad: true,
          hfov: 110,
          compass: false,
          showFullscreenCtrl: true,
          onError: function (err) {
            console.error("Error loading panorama:", err);
          },
          hotSpots: [
            {
              pitch: 14.1,
              yaw: 1.5,
              type: "custom",
              createTooltipFunc: (hotSpotDiv) => {
                // Stel de containerstijl in
                hotSpotDiv.style.width = "20rem"; // Maak de container groter
                hotSpotDiv.style.height = "20rem"; // Zorg dat deze even groot is als de afbeelding
                hotSpotDiv.style.overflow = "visible"; // Laat inhoud buiten de container zien


                const img = document.createElement("img");
                img.src = "/images/comet.png";
                img.style.width = "20rem"; // Grotere breedte
                img.style.height = "20rem"; // Grotere hoogte
                img.style.cursor = "pointer";
                img.style.borderRadius = "50%"; // Optioneel, ronde afbeelding
                hotSpotDiv.appendChild(img);

                // Voeg een click-handler toe
                img.addEventListener("click", () => {
                  window.open("https://artbma.org/", "_blank");
                });
              },
            },
            {
              pitch: -9.4,
              yaw: 222.6,
              type: "custom",
              createTooltipFunc: (hotSpotDiv) => {
                // Stel de containerstijl in
                hotSpotDiv.style.width = "20rem"; // Maak de container groter
                hotSpotDiv.style.height = "20rem"; // Zorg dat deze even groot is als de afbeelding
                hotSpotDiv.style.overflow = "visible"; // Laat inhoud buiten de container zien


                const img = document.createElement("img");
                img.src = "/images/sun.png";
                img.style.width = "20rem"; // Grotere breedte
                img.style.height = "20rem"; // Grotere hoogte
                img.style.cursor = "pointer";
                img.style.borderRadius = "50%"; // Optioneel, ronde afbeelding
                hotSpotDiv.appendChild(img);

                // Voeg een click-handler toe
                img.addEventListener("click", () => {
                  window.open("https://artbma.org/", "_blank");
                });
              },
            },
            {
              pitch: -0.9,
              yaw: 144.4,
              type: "custom",
              createTooltipFunc: (hotSpotDiv) => {
                // Stel de containerstijl in
                hotSpotDiv.style.width = "20rem"; // Maak de container groter
                hotSpotDiv.style.height = "20rem"; // Zorg dat deze even groot is als de afbeelding
                hotSpotDiv.style.overflow = "visible"; // Laat inhoud buiten de container zien


                const img = document.createElement("img");
                img.src = "/images/satelite.png";
                img.style.width = "20rem"; // Grotere breedte
                img.style.height = "20rem"; // Grotere hoogte
                img.style.cursor = "pointer";
                img.style.borderRadius = "50%"; // Optioneel, ronde afbeelding
                hotSpotDiv.appendChild(img);

                // Voeg een click-handler toe
                img.addEventListener("click", () => {
                  window.open("https://artbma.org/", "_blank");
                });
              },
            },
            {
              pitch: -0.9,
              yaw: 300.4,
              type: "custom",
              createTooltipFunc: (hotSpotDiv) => {
                // Stel de containerstijl in
                hotSpotDiv.style.width = "20rem"; // Maak de container groter
                hotSpotDiv.style.height = "20rem"; // Zorg dat deze even groot is als de afbeelding
                hotSpotDiv.style.overflow = "visible"; // Laat inhoud buiten de container zien


                const img = document.createElement("img");
                img.src = "/images/black-hole.png";
                img.style.width = "20rem"; // Grotere breedte
                img.style.height = "20rem"; // Grotere hoogte
                img.style.cursor = "pointer";
                img.style.borderRadius = "50%"; // Optioneel, ronde afbeelding
                hotSpotDiv.appendChild(img);

                // Voeg een click-handler toe
                img.addEventListener("click", () => {
                  window.open("https://artbma.org/", "_blank");
                });
              },
            },
          ],
        });
      } else {
        console.error("Pannellum is not defined. Ensure the script is loaded.");
      }
    });
  },
};
</script>

<style scoped>
#panorama {
  width: 100%;
  height: 100vh;
}
</style>
