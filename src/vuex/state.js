const state = {
  userName: null, // 登录用户名
  userEmail: null, // 登录邮箱
  userPwd: null, // 登录密码
  section: '', // 帖子版块
  title: '', // 帖子标题
  content: '', // 帖子内容
  publish: null, // 帖子版本号
  comment: '', // 评论内容
  userInfo: [], // 所有帖子
  login_user: (window.localStorage.getItem('gamerutopia_user')) ? window.localStorage.getItem('gamerutopia_user') : '登录', // 登录与后台用户名标识
  // token,本地若有token值，则注入store，若无则为null
  token: (window.localStorage.getItem('gamerutopia_token')) ? window.localStorage.getItem('gamerutopia_token') : null,
  // 用户身份
  status: (window.localStorage.getItem('gamerutopia_status')) ? window.localStorage.getItem('gamerutopia_status') : null,
  alert: {msg: '', show: false} // alert弹框内容
};

export default state;
