<template>
  <div class="article">
    <div class="article" v-for="(item, index) in articles" :key="index">
      <h5 class="article-title">
        {{item.a_title}}
        <p class="article-authorname">作者：{{item.a_authorname}}</p>
      </h5>
      <p class="article-content">{{item.a_content}}</p>
      <img class="article-img" :src="item.a_img">
    </div>
  </div>
</template>

<script>
  import {getArticle} from 'api/home';
  export default {
    name: 'Article',
    components: {},
    props: {},
    data() {
      return {
        articles: []
      };
    },
    watch: {},
    computed: {},
    methods: {
      getHomeArticle() {
        getArticle().then(data => {
          this.articles = data;
          // console.log(articles);
        });
      }
    },
    created() {
      this.getHomeArticle();
    },
    mounted() {}
  };
</script>
<style lang="scss" scoped>
  @import "~assets/scss/mixins";
  .article {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    margin-top: 50px;
    padding: 0 20px 0 20px;
    overflow: hidden;
    position: absolute;
    background-color: #fff;
    z-index: $product-z-index;// 提高层级以达到点击news可以进行跳转

    &-title {
      font-size: 25px;
      line-height: 40px;
      font-weight: 900;
      color: black;
    }
    &-content {
      margin-top: 20px;
      width: 100%;
      font-size: 15px;
      line-height: 30px;
    }

    &-img {
      width: 100%;
      margin-top: 10px;
    }

    &-authorname {
      margin-top: 20px;
      float: right;
      color: #999;
      font-weight: 600;
      font-size: 10px;
    }
  }
</style>
