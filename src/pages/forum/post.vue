<template>
  <div class="posts">
    <!-- 加载gif -->
    <div class="loading-container" v-if="!posts.length">
      <me-loading class="me-loading" inline/>
    </div>
    <!-- 视频 -->
    <ul class="posts-list">
      <li class="posts-item" v-for="(item, index) in posts" :key="index">
        <!-- 实现二级路由跳转演示和普通链接 -->
        <router-link class="posts-link"
          :to="{name: 'forum-post', params: {id: item.p_publish}}"
          v-if="item.p_publish>2019030428">
          <div class="user-info">
            <img class="posts-img" :src="item.p_avatar" alt="图片加载失败">
            <span class="posts-id">{{item.p_name}}</span>
            <span class="posts-time">{{item.p_time}}</span>
          </div>
          <p class="posts-title">
            {{item.p_section}}
            {{item.p_title}}
            <span class="posts-router">&nbsp;&nbsp;>>>演示</span>
          </p>
        </router-link>
        <a :href="item.p_linkUrl" class="posts-link" v-else>
          <div class="user-info">
            <img class="posts-img" :src="item.p_avatar" alt="图片加载失败">
            <span class="posts-id">{{item.p_name}}</span>
            <span class="posts-time">{{item.p_time}}</span>
          </div>
          <p class="posts-title">{{item.p_title}}</p>
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
  import MeLoading from 'base/loading';
  import {getPost, getUpdatePost} from 'api/forum';

  export default {
    name: 'ForumPost',
    components: {
      MeLoading
    },
    props: {},
    data() {
      return {
        posts: [],
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
        return this.getHomePost();
      },
      update() {
        this.posts = [];
        return this.getNePost();
      },

      getHomePost() {
        if (this.currentPage > this.totalPage) {
          this.$message('没有更多了');
          return Promise.reject(new Error('没有更多了'));
        }
        return getPost(this.currentPage).then(data => {
          return new Promise(resolve => {
            if (data) {
              /* console.log(data); */
              this.currentPage++;
              this.totalPage = data.totalPage;
              this.posts = this.posts.concat(data.itemList);
              this.$emit('loaded', this.posts);
              resolve();
            }
          });
        });
      },
      getNePost() {
        if (this.currentPage > this.updatePage) {
          this.$message('没有更多了');
          return Promise.reject(new Error('没有更多了'));
        }
        return getUpdatePost(this.updatePage).then(data => {
          return new Promise(resolve => {
            if (data) {
              /* console.log(data); */
              this.posts = this.posts.concat(data.itemList);
              this.$emit('loaded', this.posts);
              resolve();
            }
          });
        });
      }
    },
    created() {
      this.getHomePost();
      this.getNePost();
    },
    mounted() {}
  };
</script>
<style lang="scss" scoped>
@import "~assets/scss/mixins";
  .me-loading {
    margin-top: 30%;
  }
  .posts {
    margin-top: 51px;

    &-item {
      flex-wrap: wrap;
      margin-top: 5px;
      width: 100%;
      background-color: #fff;
      padding: 10px;
    }

    &-img {
      width: 35px;
      height: 35px;
      border-radius: 50%;
      margin-top: -4px;
    }

    &-id {
      display: inline;
      color:deepskyblue;
    }

    &-time {
      margin-right: 10px;
      font-size: 10px;
      color: #999;
    }

    &-title {
      width: 90%;
      margin: 10px 10px 0 46px;
      display: flex;
      flex-wrap: wrap;
      font-size: 13px;
      color: #333;
      line-height: 18px;
    }

    &-router {
      color: red;
    }
  }

  .loading-container {
    padding-top: 50%;
  }

  .user-info {
    display: block;
    padding: 10px;
  }
</style>
