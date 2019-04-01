const prefix = 'gamerutopia-news';
const suffix = 'key';
export const CATEGORY_CONTENT_KEY = `${prefix}-content-${suffix}`;
/* 设置缓存时间为一天 */
export const CATEGORY_CONTENT_UPDATE_TIME_INTERVAL = 1 * 24 * 60 * 60 * 1000;

/* 设置幻灯片参数 */
export const sliderOptions = {
  direction: 'horizontal',
  loop: true,
  interval: 5000, // 0为不播放
  pagination: false
};
