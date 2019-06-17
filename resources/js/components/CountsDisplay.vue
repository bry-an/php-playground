<template>
  <div class="d-flex">
    <div class="pr-4">
      <strong>{{ postCount }}</strong> posts
    </div>
    <div class="pr-4">
      <strong>{{ followerCount }}</strong> followers
    </div>
    <div class="pr-4">
      <strong>{{ followingCount }}</strong> following
    </div>
  </div>
</template>

<script>
export default {
  props: ["postCount", "followerCount", "followingCount"],

  data() {
    return {};
  },
  methods: {},
  computed: {}
};
</script>
