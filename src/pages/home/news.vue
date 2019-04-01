<template>
  <div class="news">
    <div class="loading-container" v-if="!news.length">
      <me-loading class="me-loading" inline/>
    </div>
    <ul class="news-list" v-else>
      <li class="news-item" v-for="(item, index) in news" :key="index">
        <!-- 实现二级路由跳转演示和普通链接 -->
        <router-link class="news-link" :to="{name: 'home-article', params: {id: item.n_publish}}" v-if="item.n_publish<=2019032511">
          <img class="news-img" v-lazy="item.n_picUrl" alt="图片加载失败">
          <span class="news-title">
            {{item.n_title}}
            <span class="news-router">&nbsp;&nbsp;>>>Router演示</span>
          </span>
        </router-link>
        <a :href="item.n_linkUrl" class="news-link" v-else>
          <img class="news-img" v-lazy="item.n_picUrl" alt="图片加载失败">
          <span class="news-title">{{item.n_title}}</span>
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
  import {getNews, getUpdateNews} from 'api/home';
  import MeLoading from 'base/loading';
  export default {
    name: 'HomeNews',
    components: {
      MeLoading
    },
    props: {},
    data() {
      return {
        news: [],
        currentPage: 1,
        totalPage: 1,
        updatePage: 3
      };
    },
    watch: {},
    computed: {},
    methods: {
      // API
      load() {
        return this.getHomeNews();
      },
      update() {
        this.news = [];
        return this.getNeNews();
      },

      getHomeNews() {
        if (this.currentPage > this.totalPage) {
          this.$message('没有更多了');
          return Promise.reject(new Error('没有更多了'));
        }
        return getNews(this.currentPage).then(data => {
          return new Promise(resolve => {
            if (data) {
              /* console.log(data); */
              this.currentPage++;
              this.totalPage = data.totalPage;
              this.news = this.news.concat(data.itemList);
              this.$emit('loaded', this.news);
              resolve();
            }
          });
        });
      },
      getNeNews() {
        if (this.currentPage > this.updatePage) {
          this.$message('没有更多了');
          return Promise.reject(new Error('没有更多了'));
        }
        return getUpdateNews(this.updatePage).then(data => {
          return new Promise(resolve => {
            if (data) {
              /* console.log(data); */
              this.news = this.news.concat(data.itemList);
              this.$emit('loaded', this.news);
              resolve();
            }
          });
        });
      }
    },
    created() {
      this.getHomeNews();
      this.getNeNews();
    },
    mounted() {}
  };
</script>
<style lang="scss" scoped>
@import "~assets/scss/mixins";
  .me-loading {
    margin-top: 30%;
  }
  .news {

    &-list {
      @include flex-between();
      flex-wrap: wrap;
      margin-top: 10px;
    }

    &-link {
      display: flex;
    }

    &-item {
      width: 100%;
      background-color: #fff;
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 12);
      padding: 10px;
    }

    &-img {
      width: 30%;
      height: 100%;
    }

    &-title {
      width: 70%;
      margin: 0 5px 0 15px;
      flex-wrap: wrap;
      line-height: 18px;
    }

    &-router {
      color: red;
    }
  }

  .loading-container {
    padding-top: 50%;
  }
</style>
