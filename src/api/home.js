import axios from 'axios';
import jsonp from 'assets/js/jsonp';
import {TIMEOUT, jsonpOption} from './config';

// 获取幻灯片数据
export const getHomeSlider = () => {
  return axios.get('/index/Slider/getSlide', {timeout: TIMEOUT}).then(res => {
    if (res.data) {
      return res.data;
    }
    throw new Error('获取数据失败!');
  }).catch(err => {
    if (err) {
      console.log(err);
    }
    return [
      {
        s_linkUrl: 'https://www.gamersky.com',
        s_picUrl: require('assets/img/404.png')
      }
    ];
  });
};

// 获取文章数据
export const getArticle = () => {
  return axios.get('/index/Article/getArticle', {timeout: TIMEOUT}).then(res => {
    if (res.data) {
      return res.data;
    }
    throw new Error('获取数据失败!');
  }).catch(err => {
    if (err) {
      console.log(err);
    }
  });
};

// 获取导航数据
export const getNavNews = () => {
  return axios.get('/index/Nav/getNav', {timeout: TIMEOUT}).then(res => {
    if (res.data) {
      return res.data;
    }
    throw new Error('获取数据失败!');
  }).catch(err => {
    if (err) {
      console.log(err);
    }
  });
};

// 获取新闻数据
export const getNews = (page = 1) => {
  const url = '/api/index/News/getNews';
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

// 获取更新新闻数据
export const getUpdateNews = (page = 1) => {
  const url = '/api/index/News/getNews';
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
