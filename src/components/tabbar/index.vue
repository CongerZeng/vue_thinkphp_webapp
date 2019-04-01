<template>
  <div class="g-tabbar">
    <router-link class="g-tabbar-item" to="/home">
      <i class="iconfont icon-shouye"></i>
      <span>首页</span>
    </router-link>
    <router-link class="g-tabbar-item" to="/video">
      <i class="iconfont icon-shiping"></i>
      <span>视频</span>
    </router-link>
    <router-link class="g-tabbar-item" to="/forum">
      <i class="iconfont icon-changyonggoupiaorenbianji"></i>
      <span>论坛</span>
    </router-link>
    <router-link class="g-tabbar-item" to="/personal">
      <i class="iconfont icon-wode"></i>
      <span>我的</span>
    </router-link>
  </div>
</template>

<script>
  export default {
    name: 'CTabbar'
  };
</script>

<style lang="scss" scoped>
@import "~assets/scss/mixins";

.router-link-active {
  color: $link-active-color;
}
</style>
