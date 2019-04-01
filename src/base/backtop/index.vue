<template>
  <transition name="mine-backtop">
    <a
      href=""
      class="mine-backtop"
      v-show="visible"
      @click="backToTop" >
      <i class="iconfont icon-zhiding"></i>
    </a>
  </transition>
</template>

<script>
  export default {
    name: 'MeBacktop',
    components: {},
    props: {
      visible: {
        type: Boolean,
        default: false
      }
    },
    data() {
      return {
      };
    },
    watch: {},
    computed: {},
    methods: {
      backToTop() {
        this.$emit('backtop');
      }
    },
    created() {},
    mounted() {}
  };
</script>
<style lang="scss" scoped>
  @import "~assets/scss/mixins";
  .mine-backtop {
    overflow: hidden;
    @include flex-center();
    width: 25px;
    height: 25px;
    border: none;
    border-radius: 50%;

    .iconfont {
      font-size: 38px;
    }
  }

  .mine-backtop {
    &-enter-active,
    &-leave-active {
      transition: opacity 0.4s;
    }

    &-enter,
    &-leave-to {
      opacity: 0;
    }
  }
</style>
