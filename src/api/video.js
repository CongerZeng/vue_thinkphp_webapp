import jsonp from 'assets/js/jsonp';
import {jsonpOption} from './config';

// 获取视频数据
export const getVideos = (page = 1) => {
  const url = '/api/index/Videos/getVideos';
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

// 获取更新视频数据
export const getUpdateVideos = (page = 1) => {
  const url = '/api/index/Videos/getVideos';
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
