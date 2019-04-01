<template>
  <div class="videos">
    <!-- 加载gif -->
    <div class="loading-container" v-if="!videos.length">
      <me-loading class="me-loading" inline/>
    </div>
    <!-- 视频 -->
    <ul class="videos-list" v-else>
      <li class="videos-item" v-for="(item, index) in videos" :key="index">
        <span class="videos-float" alt=""></span>
        <iframe class="videos-iframe"
          :src="item.v_linkUrl"
          border="0"
          frameborder="no"
          framespacing="0"
          allowfullscreen="true"
        >
        </iframe>
      </li>
    </ul>
  </div>
</template>

<script>
  import MeLoading from 'base/loading';
  import {getVideos, getUpdateVideos} from 'api/video';

  export default {
    name: 'VideoVideos',
    components: {
      MeLoading
    },
    props: {},
    data() {
      return {
        videos: [],
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
        return this.getHomeVideos();
      },
      update() {
        this.videos = [];
        return this.getNeVideos();
      },

      getHomeVideos() {
        if (this.currentPage > this.totalPage) {
          this.$message('没有更多了');
          return Promise.reject(new Error('没有更多了'));
        }
        return getVideos(this.currentPage).then(data => {
          return new Promise(resolve => {
            if (data) {
              /* console.log(data); */
              this.currentPage++;
              this.totalPage = data.totalPage;
              this.videos = this.videos.concat(data.itemList);
              this.$emit('loaded', this.videos);
              resolve();
            }
          });
        });
      },
      getNeVideos() {
        if (this.currentPage > this.updatePage) {
          this.$message('没有更多了');
          return Promise.reject(new Error('没有更多了'));
        }
        return getUpdateVideos(this.updatePage).then(data => {
          return new Promise(resolve => {
            if (data) {
              /* console.log(data); */
              this.videos = this.videos.concat(data.itemList);
              this.$emit('loaded', this.videos);
              resolve();
            }
          });
        });
      }
    },
    created() {
      this.getHomeVideos();
      this.getNeVideos();
    },
    mounted() {}
  };
</script>
<style lang="scss" scoped>
@import "~assets/scss/mixins";
  .loading-container {
    padding-top: 100%;
  }

  .videos {
    &-list {
      width: 100%;
      height: auto;
      margin-top: 50px;
    }

    &-item {
      width: 100%;
      height: 13rem;
    }

    &-float {
      position: absolute;
      margin-top: 1px;
      width: 100%;
      height: 6.5rem;
      opacity: 0;
    }

    &-iframe {
      width: 100%;
      height: 13rem;
      padding: 5px;
      border-radius: 10px;
    }
  }
</style>
