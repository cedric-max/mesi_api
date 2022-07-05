<template>
  <div>
    <div class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Aenean id erat vitae dolor</h1>
          <p class="lead text-muted">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Pellentesque faucibus ut eros eget dictum. Nam facilisis neque ut
            ornare convallis. Donec eget iaculis velit. Nulla quis finibus
            dolor. Nam condimentum malesuada nisl.
          </p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </div>
    </div>
    <div class="album py-5 bg-light">
      <div class="container" v-if="articles">
        <ArticleCard :articles="articles"></ArticleCard>
      </div>
    </div>
  </div>
</template>

<script>
import ArticleCard from "@/components/ArticleCard";
import axios from "axios";
export default {
  name: "ListArticlesView",
  components: {
    ArticleCard,
  },
  data() {
    return {
      articles: "",
    };
  },
  created() {
    axios
      .get("https://127.0.0.1:8000/api/shoes?page=1")
      .then((response) => {
        this.articles = response.data["hydra:member"];
        console.log(this.articles);
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>

<style scoped></style>
