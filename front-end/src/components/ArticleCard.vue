<template>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col" v-for="article in articles" :key="article.id">
      <div class="card shadow-sm">
        <img
          :src="article.picture"
          class="bd-placeholder-img card-img-top"
          width="auto"
          height="425"
          alt="..."
        />

        <div class="card-body">
          <p class="card-text">
            {{ article.name }}
          </p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-sm btn-outline-secondary"
                @click="goTodetail(article.id)"
              >
                Details
              </button>
              <button type="button" class="btn btn-sm btn-outline-secondary">
                Add chart
              </button>
            </div>
            <small class="text-muted">{{ article.price }} $</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ArticleCard",
  props: ["articles"],
  methods: {
    goTodetail: function (id) {
      console.log(id);
      this.$router.push({ name: "articlesDetails", params: { id: id } });
      return id;
    },
  },
};
</script>

<style scoped></style>
