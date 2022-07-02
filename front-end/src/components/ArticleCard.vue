<template>
  <div class="container" v-if="articles">
    <div class="row">
      <div
        class="card col-xl-6 shadow-lg p-3 mb-5 bg-body rounded"
        v-for="article in articles"
        :key="article.id"
        v-on:click="getCardId(article.id)"
      >
        <div class="row g-0">
          <div class="col-md-4">
            <img
              :src="article.picture"
              class="img-fluid rounded-start"
              alt="..."
            />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ article.name }}</h5>
              <p class="card-text">Prix : {{ article.price }} €</p>
              <p class="card-text">
                <small class="text-muted" v-if="article.stock">En stock</small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "ArticleCard",
  data() {
    return {
      articles: "",
    };
  },
  methods: {
    getCardId: function (id) {
      console.log(id);
      this.$router.push("/articlesDetails");
      // let routerIdArticle = this.$router.resolve({ path: "/ArticlesDetails" });
      // window.location(routerIdArticle.href);
      return id;
    },
  },
  created() {
    axios
      .get("http://127.0.0.1:8000/api/shoes?page=1")
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
