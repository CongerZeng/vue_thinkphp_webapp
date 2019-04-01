<template>
  <div class="video">
    <!-- 滚动条 -->
    <me-scroll
      :data="videos"
      pullDown
      pullUp
      @pull-down="pullToRefresh"
      @pull-up="pullToLoadMore"
      @scroll-end="scrollEnd"
      ref="scroll"
    >
      <video-videos @loaded="getVideosH" ref="video" />
    </me-scroll>
    <!-- 置顶 -->
    <div class="g-backtop-container">
      <me-backtop :visible="isBacktopVisible" @backtop="backToTop"/>
    </div>
  </div>
</template>

<script>
  import MeScroll from 'base/scroll';
  import MeBacktop from 'base/backtop';
  import VideoVideos from './videos';

  export default {
    name: 'Video',
    components: {
      MeScroll,
      MeBacktop,
      VideoVideos
    },
    props: {},
    data() {
      return {
        videos: [],
        isBacktopVisible: false
      };
    },
    methods: {
      updateScroll() {
      },
      getVideosH(videos) {
        this.videos = videos;
      },

      pullToRefresh(end) {
        this.$refs.video.update().then(end).catch(err => {
          if (err) {
            console.log(err);
          }
          end();
        });
      },
      pullToLoadMore(end) {
        this.$refs.video.load().then(end).catch(err => {
          if (err) {
            console.log(err);
          }
          end();
        });
      },
      scrollEnd(translate, scroll) {
        this.isBacktopVisible = translate < 0 && -translate > scroll.height;
      },
      backToTop() {
        this.$refs.scroll && this.$refs.scroll.scrollToTop();
      }
    },
    created() {}
  };
</script>
<style lang="scss" scoped>
@import "~assets/scss/mixins";
  .video {
    overflow: hidden;
    width: 100%;
    height: 100%;
    background-color: $bgc-theme;
  }
</style>
