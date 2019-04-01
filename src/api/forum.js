import jsonp from 'assets/js/jsonp';
import {jsonpOption} from './config';

// 获取论坛数据
export const getPost = (page = 1) => {
  const url = '/api/index/Post/getPost';
  const params = {
    page
  };

  return jsonp(url, params, jsonpOption).then(res => {
    if (res.code === '200') {
      /* console.log(url);
      console.log(params); */
      return res;
    }

    throw new Error('获取数据失败!');
  }).catch(err => {
    if (err) {
      console.log(err);
    }
  });
};

// 获取更新论坛数据
export const getUpdatePost = (page = 1) => {
  const url = '/api/index/Post/getPost';
  const params = {
    page
  };

  return jsonp(url, params, jsonpOption).then(res => {
    if (res.code === '200') {
      /* console.log(url);
      console.log(params); */
      return res;
    }

    throw new Error('获取数据失败!');
  }).catch(err => {
    if (err) {
      console.log(err);
    }
  });
};
