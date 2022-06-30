<template>
  <div>
    <h3>Articles Listes</h3>
    <ArticleCard></ArticleCard>
  </div>
</template>

<script>
import ArticleCard from "@/components/ArticleCard";
export default {
  name: "ListArticlesView",
  components: {
    ArticleCard,
  },
};
</script>

<style scoped></style>
