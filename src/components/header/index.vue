<template>
  <me-navbar class="header" title="">
    <router-link to="/home" slot="left">
      <img src="static/logo.png" width="50%" height="50%">
    </router-link>
    <router-link to="/issue" slot="right">
      <i class="iconfont icon-luntan"></i>
    </router-link>
    <!-- <router-link to="/login" slot="right">
      <i class="iconfont icon-wode"></i>
    </router-link> -->
  </me-navbar>
</template>

<script>
  import MeNavbar from 'base/navbar';

  export default {
    name: 'HomeHeader',
    components: {
      MeNavbar
    },
    props: {},
    data() {
      return {
      };
    },
    watch: {},
    computed: {},
    methods: {},
    created() {},
    mounted() {}
  };
</script>
<style lang="scss" scoped>
</style>
