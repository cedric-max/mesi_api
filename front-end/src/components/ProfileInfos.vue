<template>
  <div v-if="user">
    <p>email : {{ user.email }}</p>
    <p>role : {{ user.roles }}</p>
    <p>psw : {{ user.password }}</p>
    <p>firstName : {{ user.firstName }}</p>
    <p>lastName : {{ user.username }}</p>
    <p>adress : {{ user.address }}</p>
    <p>phoneNumber : {{ user.phoneNumber }}</p>
    <p>city : {{ user.city }}</p>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "ProfileInfos",
  data() {
    return {
      user: "",
    };
  },
  created() {
    axios
      .get("https://127.0.0.1:8000/api/users?page=1")
      .then((response) => {
        this.user = response.data["hydra:member"][6];
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>

<style scoped></style>
