<template>
  <div id="app">
    <b-navbar fixed="top" toggleable="lg" type="dark" variant="dark">
      <b-navbar-brand href="/"> NavBar </b-navbar-brand>
      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav>
          <b-nav-item to="/about"> About </b-nav-item>
          <b-nav-item to="/profile"> Profile </b-nav-item>
          <b-nav-item to="/listArticles"> Articles </b-nav-item>
          <b-nav-item disabled href="#"> Disabled </b-nav-item>
          <b-nav-item to="sign-in"> Conection </b-nav-item>
          <b-nav-item to="/cart">Cart </b-nav-item>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
    <router-view />
  </div>
</template>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  padding-top: 3rem;
  padding-bottom: 3rem;
}
</style>
