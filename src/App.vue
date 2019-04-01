<template>
  <div id="app" class="g-container">
    <div class="g-header-container">
      <c-header/>
    </div>
    <div class="g-view-container">
      <!-- 让组件保存在内存中不用重新加载 -->
      <keep-alive>
        <router-view></router-view>
      </keep-alive>
    </div>
    <div class="g-footer-container">
      <c-tabbar/>
    </div>
  </div>
</template>

<script>
  import CTabbar from 'components/tabbar';
  import CHeader from 'components/header';
  export default {
    name: 'App',
    components: {
      CTabbar,
      CHeader
    }
  };
</script>
