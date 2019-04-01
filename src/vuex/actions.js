import axios from 'axios';
import router from '../router';

const common = require('./common');

const _axios = params => {
  return axios({
    method: 'post',
    url: '/index.php/index',
    // url: state.URL,
    data: params
  });
};

const actions = {
  // 验证用户是否登录
  check_login({state, commit}) {
    // console.log(state.token);
    let params = {
      'act': 'check_login'
    };
    _axios(params).then(function (res) {
      /* console.log('成功了');
      console.log(res.data); */
      if (res.data.login) {
        router.push('/issue');
      } else {
        commit('logout');
        router.push('/login');
        console.log('失败了');
      }
    }).catch(function (err) {
      commit('logout');
      router.push('/login');
      console.log(err);
      console.log('失败了');
    });
  },

  // 用户提交登录
  login({commit, state}) {
    let params = {
      'act': 'login',
      'email': state.userEmail,
      'pwd': state.userPwd
    };
    _axios(params).then(function (res) {
      if (res.data.result && res.data.data) {
        // 本地存储token
        let result = res.data.data;
        axios.defaults.headers.common['X-token'] = result.jwt;
        localStorage.setItem('gamerutopia_token', result.jwt);
        localStorage.setItem('gamerutopia_user', result.name);
        localStorage.setItem('gamerutopia_email', result.email);
        localStorage.setItem('gamerutopia_status', result.userstatus);
        // 同步token到store中
        commit('token', result);
        console.log('登录成功');
        router.push('/issue');
      } else {
        if (res.data.message) {
          commit('show_alert', res.data.message);
        } else {
          commit('show_alert', '密码或邮箱错误！');
        }
      }
    }).catch(function (err) {
      console.log(err);
      console.log('登录失败');
    });
  },

  // 用户退出登录
  logout({commit}) {
    commit('logout');
    router.push('/home');
  },

  // 用户提交注册
  register({commit, state}) {
    // console.log(state.userPwd);
    let params = {
      'act': 'register',
      'email': state.userEmail,
      'name': state.userName,
      'pwd': state.userPwd,
      'time': common.getTime()
    };
    _axios(params).then(function (res) {
      if (!res.data.result) { return; }
      if (res.data.data.msg) {
        commit('show_alert', res.data.data.msg);
      } else {
        commit('show_alert', '注册失败');
      }
      if (res.data.data.result) {
        console.log('注册成功');
        router.push('/login');
      }
    }).catch(function (err) {
      console.log(err);
      console.log('注册失败');
    });
  },

  // 发布帖子
  addPost({commit, state}) {
    let params = {
      'act': 'addPost',
      'name': state.login_user,
      'section': state.section,
      'title': state.title,
      'content': state.content,
      'time': common.getTime()
    };
    _axios(params).then(function (res) {
      // console.log('成功了');
      // console.log(res);
      if (res.data.result) {
        router.push('/forum');
        commit('updatePost');
      }
      if (!res.data.login) {
        router.push('/login');
        commit('show_alert', '登录超时，请重新登录');
        commit('logout');
      }
    }).catch(function (err) {
      console.log(err);
      console.log('失败了');
    });
  },
  // 删除选中帖子
  delPost({commit}, obj) {
    // console.log(obj);
    let params = {
      'act': 'delPost',
      'postTitle': obj.postTitle
    };
    _axios(params).then(function (res) {
      // console.log('成功了');
      if (res.data.result) {
        commit('DELPOST', obj.index);
      }
      if (res.data.error === 1) {
        commit('show_alert', '无法删除文章');
      }
      if (!res.data.login) {
        router.push('/login');
        commit('show_alert', '登录超时，请重新登录');
        commit('logout');
      }
    }).catch(function (err) {
      router.push('/home');
      console.log(err);
      console.log('失败了');
    });
  },

  /// 发表评论
  addComment({commit, state}) {
    let params = {
      'act': 'addComment',
      'name': state.login_user,
      'comment': state.comment,
      'publish': state.publish,
      'time': common.getTime()
    };
    /* console.log(params); */
    _axios(params).then(function (res) {
      // console.log('成功了');
      // console.log(res);
      if (res.data.result) {
        commit('updateComment');
      }
      if (!res.data.login) {
        router.push('/login');
        commit('show_alert', '登录超时，请重新登录');
        commit('logout');
      }
    }).catch(function (err) {
      console.log(err);
      console.log('失败了');
    });
  }
};

export default actions;
