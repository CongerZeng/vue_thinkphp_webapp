<template>
  <div class="forum">
    <!-- 滚动条 -->
    <me-scroll
      :data="posts"
      pullDown
      pullUp
      @pull-down="pullToRefresh"
      @pull-up="pullToLoadMore"
      @scroll-end="scrollEnd"
      ref="scroll"
    >
      <forum-post @loaded="getPostsH" ref="post" />
    </me-scroll>
    <!-- 置顶 -->
    <div class="g-backtop-container">
      <me-backtop :visible="isBacktopVisible" @backtop="backToTop"/>
    </div>
    <!-- 必须要有才能渲染... -->
    <router-view></router-view>
  </div>
</template>

<script>
  import MeScroll from 'base/scroll';
  import MeBacktop from 'base/backtop';
  import ForumPost from './post';

  export default {
    name: 'Forum',
    components: {
      MeScroll,
      MeBacktop,
      ForumPost
    },
    props: {},
    data() {
      return {
        posts: [],
        isBacktopVisible: false
      };
    },
    methods: {
      updateScroll() {
      },
      getPostsH(posts) {
        this.posts = posts;
      },

      pullToRefresh(end) {
        this.$refs.post.update().then(end).catch(err => {
          if (err) {
            console.log(err);
          }
          end();
        });
      },
      pullToLoadMore(end) {
        this.$refs.post.load().then(end).catch(err => {
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
  .forum {
    overflow: hidden;
    width: 100%;
    height: 100%;
    background-color: $bgc-theme;
  }
</style>
