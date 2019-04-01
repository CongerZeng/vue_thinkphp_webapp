import axios from 'axios';

const _axios = params => {
  return axios({
    method: 'post',
    url: '/index.php/index',
    // url: state.URL,
    data: params
  });
};

// 获取跳转帖子内容
export const getPostComment = (publish) => {
  let params = {
    'act': 'comment',
    'publish': publish
  };
  /* console.log(params); */
  return _axios(params).then(res => {
    if (res.data) {
      /* console.log(res.data.data); */
      return res.data.data;
    }
    throw new Error('获取数据失败!');
  }).catch(err => {
    if (err) {
      console.log(err);
    }
  });
};
