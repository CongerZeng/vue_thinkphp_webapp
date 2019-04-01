import axios from 'axios';
import state from '../vuex/state';

const _axios = params => {
  return axios({
    method: 'post',
    url: '/index.php/index',
    // url: state.URL,
    data: params
  });
};

// 获取个人数据
export const getUserInfo = () => {
  let params = {
    'act': 'get',
    'name': state.login_user
  };
  return _axios(params).then(res => {
    if (res.data) {
      /* console.log(res.data.data); */
      return res.data.data;
    }
    throw new Error('获取用户数据失败!');
  }).catch(err => {
    if (err) {
      console.log(err);
    }
  });
};
