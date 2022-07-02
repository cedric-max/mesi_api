<template>
  <div>
    <div v-if="article">
      <img :src="article.picture" class="img-fluid rounded-start" alt="..." />
      <p>Type : : {{ article.type }}</p>
      <p>Modele : {{ article.name }}</p>
      <p>Description : {{ article.description }}</p>
      <p>Price : {{ article.price }} €</p>
      <p v-if="article.stock">En Stock</p>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "ArticlesDetails",
  data() {
    return {
      article: "",
      id: "",
    };
  },
  created() {
    this.$root.$on("getCardId", this.id);
    axios
      .get(`http://127.0.0.1:8000/api/shoes/1`)
      .then((response) => {
        this.article = response.data;
        console.log(this.article);
      })
      .catch((e) => {
        console.log(e);
      });
    this.$root.$off("getCardId", this.id);
  },
};
</script>

<style scoped></style>
