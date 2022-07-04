<template>
  <div class="home">
    <HomeCarousel />
    <HomeGrid />>
  </div>
</template>

<script>
// @ is an alias to /src
import HomeCarousel from "@/components/HomeCarousel.vue";
import HomeGrid from "@/components/HomeGrid.vue";

export default {
  name: "HomeView",
  components: {
    HomeCarousel,
    HomeGrid,
  },
};
</script>
