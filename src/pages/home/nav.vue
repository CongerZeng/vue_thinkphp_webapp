<template>
  <div class="nav" v-if="navs.length">
    <img :src="require('assets/img/top.png')" alt="">
    <ul class="nav-list">
      <li class="nav-item" v-for="(item, index) in navs" :key="index">
        <a :href="item.v_linkUrl" class="nav-link">
          <span>{{item.v_title}}</span>
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
  import {getNavNews} from 'api/home';
  export default {
    name: 'HomeNav',
    components: {},
    props: {},
    data() {
      return {
        navs: []
      };
    },
    watch: {},
    computed: {},
    methods: {
      getNav() {
        getNavNews().then(data => {
          this.navs = data;
          // console.log(navs);
        });
      }
    },
    created() {
      this.getNav();
    },
    mounted() {}
  };
</script>
<style lang="scss" scoped>
  @import "~assets/scss/mixins";
  .nav {
    @include flex-center(row);
    width: 100%;
    background-color: #fff;

    &-list {
      flex-wrap: wrap;
      width: 70%;
      height: 100%;
      flex: 1;
    }

    &-item {
      width: 100%;
      margin: 15px;
    }
  }

  .nav img {
    width: 30%;
    height: 100%;
  }
</style>
