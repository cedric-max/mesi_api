<template>
  <div id="app">
    <b-navbar fixed="top" toggleable="lg" type="dark" variant="dark">
      <b-navbar-brand href="/">NavBar</b-navbar-brand>
      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav>
          <b-nav-item to="/about">About</b-nav-item>
          <b-nav-item to="/profile">Profile</b-nav-item>
          <b-nav-item to="/listArticles">Articles</b-nav-item>
          <b-nav-item href="#" disabled>Disabled</b-nav-item>
          <b-nav-item href="#" disabled class="ml-auto">Conection</b-nav-item>
          <b-nav-item href="#" disabled class="ml-auto">Cart</b-nav-item>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
    <!--<nav>
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link> |
      <router-link to="/profile">Profile</router-link> |
      <router-link to="/listArticles">Articles</router-link>
    </nav>-->
    <router-view />
  </div>
</template>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
