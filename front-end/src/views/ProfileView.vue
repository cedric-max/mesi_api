<template>
  <div>
    <ProfilePicture></ProfilePicture>
    <ProfileInfos></ProfileInfos>
  </div>
</template>

<script>
import ProfilePicture from "@/components/ProfilePicture";
import ProfileInfos from "@/components/ProfileInfos";
export default {
  name: "ProfileView",
  components: {
    ProfilePicture,
    ProfileInfos,
  },
};
</script>

<style scoped></style>
