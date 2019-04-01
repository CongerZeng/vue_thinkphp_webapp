<template>
  <div class="home">
    <!-- 获取内容高度+更新滚动条+下拉刷新 -->
    <me-scroll
      :data="news"
      pullDown
      pullUp
      @pull-down="pullToRefresh"
      @pull-up="pullToLoadMore"
      @scroll-end="scrollEnd"
      ref="scroll"
    >
      <home-slider ref="slider"/>
      <home-nav/>
      <home-news @loaded="getNewsH" ref="new"/>
    </me-scroll>
    <div class="g-backtop-container">
      <me-backtop :visible="isBacktopVisible" @backtop="backToTop"/>
    </div>
    <router-view></router-view>
  </div>
</template>

<script>
  import MeScroll from 'base/scroll';
  import MeBacktop from 'base/backtop';
  import HomeSlider from './slider';
  import HomeNav from './nav';
  import HomeArticle from './article';
  import HomeNews from './news';

  export default {
    name: 'Home',
    components: {
      HomeSlider,
      HomeNav,
      HomeNews,
      HomeArticle,
      MeScroll,
      MeBacktop
    },
    data() {
      return {
        news: [],
        isBacktopVisible: false
      };
    },
    methods: {
      updateScroll() {
      },
      getNewsH(news) {
        this.news = news;
      },
      pullToRefresh(end) {
        this.$refs.new.update().then(end).catch(err => {
          if (err) {
            console.log(err);
          }
          end();
        });
      },
      pullToLoadMore(end) {
        this.$refs.new.load().then(end).catch(err => {
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
  .home {
    overflow: hidden;
    width: 100%;
    height: 100%;
    background-color: $bgc-theme;
  }
</style>
