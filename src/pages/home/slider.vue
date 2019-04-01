<template>
  <div class="slider-wrapper">
    <!-- <me-loading v-if="!sliders.length" class="me-loading"/> -->
    <me-slider
      :data="sliders"
      :direction="direction"
      :loop="loop"
      :interval="interval"
      :pagination="pagination"
      v-if="sliders.length"
    >
      <swiper-slide v-for="(item, index) in sliders" :key="index">
        <a :href="item.s_linkUrl" class="slider-link">
          <span class="slider-title">{{item.s_title}}</span>
          <img :src="item.s_picUrl" alt="图片加载失败" class="slider-img">
        </a>
      </swiper-slide>
    </me-slider>
  </div>
</template>

<script>
  import MeSlider from 'base/slider';
  import {swiperSlide} from 'vue-awesome-swiper';
  import {sliderOptions} from './config';
  import {getHomeSlider} from 'api/home';
  import MeLoading from 'base/loading';

  export default {
    name: 'HomeSlider',
    components: {
      MeSlider,
      MeLoading,
      swiperSlide
    },
    props: {},
    data() {
      return {
        direction: sliderOptions.direction,
        loop: sliderOptions.loop,
        interval: sliderOptions.interval,
        pagination: sliderOptions.pagination,
        sliders: []
      };
    },
    watch: {},
    computed: {},
    methods: {
      getSliders() {
        getHomeSlider().then(data => {
          this.sliders = data;
        });
      }
    },
    created() {
      this.getSliders();
    },
    mounted() {}
  };
</script>
<style lang="scss" scoped>
  .me-loading {
    margin-top: 30%;
  }
  .slider-wrapper {
    width: 100%;
  }
  .slider-link {
    display: block;
    margin-top: 50px;
  }
  .slider-link,
  .slider-img {
    overflow: hidden;
    width: 100%;
    height: 100%;
  }
  .slider-title {
    position: absolute;
    bottom: 0;
    left: 0;
    margin: 0;
    padding: .4rem 1.6rem .2rem .25rem;
    width: 100%;
    background-image: -webkit-linear-gradient(top,transparent 0,rgba(0,0,0,.8) 100%);
    background-image: linear-gradient(to bottom,transparent 0,rgba(0,0,0,.8) 100%);
    font-size: 15px;
    font-weight: 400;
    color: #fff;
    overflow: hidden;
}
</style>
<style>
  .slider-wrapper .swiper-container-horizontal>.swiper-pagination-bullets {
    left: auto;
    right: 0;
    bottom: 3px;
    width: 20%;
  }
  .slider-wrapper .swiper-pagination-bullet {
    background: #fff;
  }
  .slider-wrapper .swiper-pagination-bullet-active {
    background: red;
  }
</style>
