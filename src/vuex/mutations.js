const common = require('./common');

const mutations = {
  // 更新当前时间
  get_now_time: function (state) {
    state.now_time = common.getTime();
    // console.log(state.now_time);
  },
  // 登录成功，同步token到store中
  token(state, data) {
    state.token = data.jwt;
    state.userPwd = '';
    state.commenter = data.name;
    state.status = data.userstatus;
    state.commenterEmail = data.email;
    state.login_user = data.name;
  },
  // 注销登录
  logout(state) {
    state.token = null;
    state.login_user = '登录';
    state.userName = '';
    state.userEmail = '';
    state.status = '';
    state.commenter = '';
    state.commenterEmail = '';
    localStorage.removeItem('gamerutopia_user');
    localStorage.removeItem('gamerutopia_token');
    localStorage.removeItem('gamerutopia_email');
    localStorage.removeItem('gamerutopia_status');
  },
  // 显示alert弹框
  show_alert(state, data) {
    state.alert.msg = data;
    state.alert.show = true;
  },
  // 设置userEmail和登录页面的v-model绑定
  updateuserEmail(state, userEmail) {
    state.userEmail = userEmail;
  },
  // 设置userPwd和登录页面的v-model绑定
  updateuserPwd(state, userPwd) {
    state.userPwd = userPwd;
  },
  // 设置userName和登录页面的v-model绑定
  updateuserName(state, userName) {
    state.userName = userName;
  },
  // 设置section和帖子编辑页的v-model绑定
  updateSection(state, section) {
    state.section = section;
  },
  // 设置title和帖子编辑页的v-model绑定
  updateTitle(state, title) {
    state.title = title;
  },
  // 设置content和帖子编辑页的v-model绑定
  updateContent(state, content) {
    state.content = content;
  },
  // 设置comment和帖子编辑页的v-model绑定
  updateComment(state, comment) {
    state.comment = comment;
  },
  // 点击发布帖子后，初始化页面数据
  updatePost(state) {
    state.section = '';
    state.title = '';
    state.content = '';
  },
  // 将删除的文章数据移除items列表
  DELPOST(state, index) {
    // console.log(index);
    state.userInfo.splice(index, 1);
  }
};

export default mutations;
