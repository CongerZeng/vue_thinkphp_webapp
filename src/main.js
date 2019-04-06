import 'babel-polyfill';
import Vue from 'vue';
import App from './App';
import router from './router';
import store from './vuex/store';
import mutations from './vuex/mutations';
import VueLazyload from 'vue-lazyload';
import Axios from 'axios';
import fastclick from 'fastclick';
import ElementUI from 'element-ui';

import 'element-ui/lib/theme-chalk/index.css';
import 'assets/scss/index.scss';
import 'swiper/dist/css/swiper.css';

/* 安装vue-lazyload */
Vue.use(VueLazyload, {
  preLoad: 1,
  error: require('assets/img/Error.png'),
  loading: require('assets/img/loading.gif'),
  attempt: 1
});

Vue.use(ElementUI);

/* 安装vue-axios */
Vue.prototype.$axios = Axios;
Axios.defaults.baseURL = '/api';
Axios.defaults.headers.post['Content-Type'] = 'application/json';
Axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
// 超时时间
Axios.defaults.timeout = 5000;
Axios.defaults.withCredentials = false;
// http request 拦截器
Axios.interceptors.request.use(
  config => {
    if (store.state.token) { // 判断是否存在token，如果存在的话，则每个http header都加上token
      config.headers.common['X-token'] = store.state.token;
      // console.log(config.headers);
    } else {
      config.headers.common['X-token'] = '';
    }
    store.state.show_loading = true;
    return config;
  },
  err => {
    return Promise.reject(err);
});
// http response 拦截器
Axios.interceptors.response.use(
  response => {
    store.state.show_loading = false;
    return response;
  },
  error => {
    if (error.response) {
      switch (error.response.status) {
      case 401:
        // 返回 401 清除token信息并跳转到登录页面
        mutations.logout(store.state);
        alert('身份过期请重新登录');
        router.replace({
          path: '/login',
          query: {redirect: router.currentRoute.fullPath}
        });
      }
    }
    store.state.show_loading = false;
    return Promise.reject(error.response.data); // 返回接口返回的错误信息
});

/* fastclick */
fastclick.attach(document.body);

Vue.config.productionTip = false;

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  render: h => h(App)
});
