import Vue from 'vue';
import Router from 'vue-router';
import store from '../vuex/store.js';

Vue.use(Router);

const routes = [
  {
    name: 'home',
    path: '/home',
    component: () => import('pages/home'),
    children: [
      {
        name: 'home-article',
        path: 'article/:id',
        component: () => import('pages/article')
      }
    ]
  },
  {
    name: 'video',
    path: '/video',
    component: () => import('pages/video')
  },
  {
    name: 'forum',
    path: '/forum',
    component: () => import('pages/forum'),
    children: [
      {
        name: 'forum-post',
        path: 'post/:id',
        meta: {
          requireAuth: true
        },
        component: () => import('pages/post')
      }
    ]
  },
  {
    name: 'personal',
    path: '/personal',
    meta: {
      requireAuth: true // 添加该字段，表示进入这个路由是需要登录的
    },
    component: () => import('pages/personal')
  },
  {
    name: 'login',
    path: '/login',
    component: () => import('pages/login')
  },
  {
    name: 'register',
    path: '/register',
    component: () => import('pages/register')
  },
  {
    name: 'issue',
    path: '/issue',
    meta: {
      requireAuth: true // 添加该字段，表示进入这个路由是需要登录的
    },
    component: () => import('pages/issue')
  },
  {
    path: '*',
    redirect: '/home'
  }
];

const router = new Router({
  routes,
  mode: 'history'
});

router.beforeEach((to, from, next) => {
  if (to.matched.some(r => r.meta.requireAuth)) {
    if (store.state.token) {
      next();
    } else {
      next({
        path: '/login',
        query: {redirect: to.fullPath}
      });
    }
  } else {
    next();
  }
});

export default router;
