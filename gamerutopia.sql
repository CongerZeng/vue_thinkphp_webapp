/*
 Navicat Premium Data Transfer

 Source Server         : GamerUtopia
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : gamerutopia

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 31/03/2019 08:38:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_publish` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `a_authorname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `a_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `a_content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `a_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES (1, '2019032511', 'Zephyr', '《只狼：影逝二度》Steam特别好评！玩家大赞：死字都要不认识了', '《只狼：影逝二度》已于昨日深夜正式解锁，翘首以盼的玩家终于开启了抖M之旅，相信有不少人都受苦受到了凌晨，获得了媒体一致好评的《只狼》在玩家群中同样备受推崇，该作在Steam上的玩家评价目前为特别好评。已经习惯并且享受着宫崎英高祖传虐心虐身模式的玩家在《只狼》中被一个大大的“死”字疯狂刷屏，不少在Steam的游戏评价区哀嚎，直呼几个小时死下来都要不认识“死”字怎么写了', 'https://img1.gamersky.com/image2019/03/20190322_ll_red_136_1/gamersky_01small_02_2019322942B9A.jpg');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `c_publish` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `c_comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `c_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES (2, 'admin', '2019056820', '毕业设计完成', '3-27 2:36:55');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `start_time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `end_time` timestamp(0) NOT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`version`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (20190215150403, 'Article', '2019-03-27 02:24:34', '2019-03-27 02:24:34', 0);
INSERT INTO `migrations` VALUES (20190220093837, 'News', '2019-03-27 02:24:34', '2019-03-27 02:24:34', 0);
INSERT INTO `migrations` VALUES (20190222123831, 'Slider', '2019-03-27 02:24:34', '2019-03-27 02:24:34', 0);
INSERT INTO `migrations` VALUES (20190225102340, 'Nav', '2019-03-27 02:24:34', '2019-03-27 02:24:34', 0);
INSERT INTO `migrations` VALUES (20190311071401, 'Videos', '2019-03-27 02:24:34', '2019-03-27 02:24:34', 0);
INSERT INTO `migrations` VALUES (20190312051733, 'Post', '2019-03-27 02:24:34', '2019-03-27 02:24:34', 0);
INSERT INTO `migrations` VALUES (20190312111339, 'User', '2019-03-27 02:24:34', '2019-03-27 02:24:34', 0);
INSERT INTO `migrations` VALUES (20190326073115, 'Comment', '2019-03-27 02:24:34', '2019-03-27 02:24:34', 0);

-- ----------------------------
-- Table structure for nav
-- ----------------------------
DROP TABLE IF EXISTS `nav`;
CREATE TABLE `nav`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `v_publish` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `v_linkUrl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `v_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of nav
-- ----------------------------
INSERT INTO `nav` VALUES (1, '20190222_1', 'https://wap.gamersky.com/news/Content-1156201.html', '《守望先锋》新英雄来袭，黑爪超强奶爸？');
INSERT INTO `nav` VALUES (2, '20190222_2', 'https://wap.gamersky.com/news/Content-1156169.html', '《圣歌》IGN评分6.5 剧情乏味 优化平衡欠佳');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_publish` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `n_picUrl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `n_linkUrl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `n_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `page` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, '2019030411', 'https://imgs.gamersky.com/upimg/2019/201903241910416429.jpg', 'https://wap.gamersky.com/news/Content-1159187.html', '《只狼：影逝二度》Steam特别好评！玩家：死字要不认识了', '1');
INSERT INTO `news` VALUES (2, '20190304_12', 'https://imgs.gamersky.com/upimg/2019/201903041105059174.jpg', 'https://wap.gamersky.com/news/Content-1159177.html', 'Falcom公布《伊苏9》新概念图 游戏今秋发售', '1');
INSERT INTO `news` VALUES (3, '20190304_13', 'https://imgs.gamersky.com/upimg/2019/201903040950574546.jpg', 'https://wap.gamersky.com/news/Content-1159113.html', 'SE新作《Left Alive》口碑扑街 封禁直播近半价促销', '1');
INSERT INTO `news` VALUES (4, '20190304_14', 'https://imgs.gamersky.com/upimg/2019/201903041001356620.jpg', 'https://wap.gamersky.com/news/Content-1159140.html', '《实况足球》X前锋阿德里亚诺 “国王”重返绿茵', '1');
INSERT INTO `news` VALUES (5, '20190304_15', 'https://imgs.gamersky.com/pic/2016/20160110_zy_71_1.jpg', 'https://wap.gamersky.com/news/Content-1159106.html', 'Steam周销量排行榜：人类黎明成功登顶 PUBG排第二', '1');
INSERT INTO `news` VALUES (6, '20190304_16', 'https://imgs.gamersky.com/upimg/2019/201903040843594175.jpg', 'https://wap.gamersky.com/news/Content-1159107.html', '部分《圣歌》玩家找索尼退款成功 崩溃关机担心变砖', '1');
INSERT INTO `news` VALUES (7, '20190304_17', 'https://imgs.gamersky.com/upimg/2019/201903031746169812.jpg', 'https://wap.gamersky.com/news/Content-1159082.html', '《天外世界》没钱做长流程 所有地图非程序生成', '1');
INSERT INTO `news` VALUES (8, '20190304_18', 'https://imgs.gamersky.com/upimg/2019/201903041741101666.jpg', 'https://wap.gamersky.com/news/Content-1159379.html', '腾讯发《彩六围攻》调查问卷：玩这游戏您充钱吗？', '1');
INSERT INTO `news` VALUES (9, '20190304_21', 'https://imgs.gamersky.com/upimg/2019/201903071042233259.jpg', 'https://wap.gamersky.com/news/Content-1160397.html', '《永远毁灭公爵》开发商将迎新作 雷神之锤引擎打造', '2');
INSERT INTO `news` VALUES (10, '20190304_22', 'https://imgs.gamersky.com/upimg/2019/201903071024214595.jpg', 'https://wap.gamersky.com/news/Content-1160373.html', '《Apex英雄》迎平衡改动 辅助手枪和和平捍卫者遭削', '2');
INSERT INTO `news` VALUES (11, '20190304_23', 'https://imgs.gamersky.com/upimg/2019/201903070941031003.jpg', 'https://wap.gamersky.com/news/Content-1160320.html', '《全境封锁2》真人预告公布 历史会铭记一切', '2');
INSERT INTO `news` VALUES (12, '20190304_24', 'https://imgs.gamersky.com/upimg/2019/201903070913259252.jpg', 'https://wap.gamersky.com/news/Content-1160292.html', '《只狼：影逝二度》新杂志扫图 更多官方截图公布', '2');
INSERT INTO `news` VALUES (13, '20190304_25', 'https://imgs.gamersky.com/upimg/2018/201805050722286918.jpg', 'https://wap.gamersky.com/news/Content-1160287.html', '《圣歌》武器系统出BUG 真人快打11新宣传片', '2');
INSERT INTO `news` VALUES (14, '20190304_19', 'https://imgs.gamersky.com/upimg/2019/201903041603152288.jpg', 'https://wap.gamersky.com/news/Content-1159307.html', '《全境封锁2》中的满级专家武器现实到底多可怕？', '2');
INSERT INTO `news` VALUES (15, '20190304_20', 'https://imgs.gamersky.com/upimg/2019/201903041509527130.jpg', 'https://wap.gamersky.com/news/Content-1159267.html', '《LOL》VEG战队拖延时间被警告 再遇女队13分钟取胜', '2');
INSERT INTO `news` VALUES (16, '20190304_26', 'https://imgs.gamersky.com/pic/2019/20190307xtn_162_1.jpg', 'https://wap.gamersky.com/news/Content-1160622.html', '《地铁：离去》开发商：一群乌克兰来的斯巴达勇士', '2');
INSERT INTO `news` VALUES (17, '20190305_01', 'https://imgs.gamersky.com/upimg/2019/201903082134314161.jpg', 'https://wap.gamersky.com/news/Content-1161180.html', '你最喜欢哪款女性为主角的游戏？', '3');
INSERT INTO `news` VALUES (18, '20190305_02', 'https://imgs.gamersky.com/upimg/2019/201903082157536947.jpg', 'https://wap.gamersky.com/news/Content-1161182.html', '玩家挖掘《Apex英雄》数据：有望加入昼夜交替模式', '3');
INSERT INTO `news` VALUES (19, '20190305_03', 'https://imgs.gamersky.com/upimg/2019/201903082043456939.jpg', 'https://wap.gamersky.com/news/Content-1161176.html', 'NV公布“吃鸡类游戏”研究：旗舰显卡高帧数K/D更高', '3');
INSERT INTO `news` VALUES (20, '20190305_04', 'https://imgs.gamersky.com/upimg/2019/201903081942199813.jpg', 'https://wap.gamersky.com/news/Content-1161169.html', '设计师暗示《守望》下一个英雄能飞 可能是女性智械', '3');
INSERT INTO `news` VALUES (21, '20190305_05', 'https://imgs.gamersky.com/pic/2018/20180704_wxt_439_1.jpg', 'https://wap.gamersky.com/gl/Content-1160681.html', '不经意间发现暗藏的玄机 《鬼泣5》全隐藏关卡攻略', '3');
INSERT INTO `news` VALUES (22, '20190305_06', 'https://imgs.gamersky.com/upimg/2019/201903081435433908.jpg', 'https://wap.gamersky.com/news/Content-1161007.html', '《八方旅人》今年推手游 单人游玩RPG、无自动战斗', '3');
INSERT INTO `news` VALUES (23, '20190305_07', 'https://imgs.gamersky.com/upimg/2019/201903081016029752.jpg', 'https://wap.gamersky.com/news/Content-1161180.html', '《战地5》大逃杀模式教学泄露 倒地后仍可射击', '3');
INSERT INTO `news` VALUES (24, '20190305_08', 'https://imgs.gamersky.com/upimg/2019/201903081031046892.jpg', 'https://wap.gamersky.com/news/Content-1161182.html', '“惊奇队长”定制款Xbox 转发原推有机会免费得', '3');

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_publish` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `p_avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `p_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `p_section` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `p_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `p_content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `p_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `p_picUrl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `page` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES (1, '2019030411', 'https://image.gamersky.com/avatar/original/game/game264.jpg', '高压电线奏东风', '', '《荣耀战魂》个人觉得设计最成功的角色', '', '3-24 23:39:27', '', '1');
INSERT INTO `post` VALUES (2, '2019030412', 'https://image.gamersky.com/avatar/original/game/game314.jpg', '传国玉玺砸核桃', '', '《极限竞速地平线4》萌新求莱肯原版尾翼的调教', '', '3-24 20:39:27', '', '1');
INSERT INTO `post` VALUES (3, '2019030413', 'https://image.gamersky.com/avatar/original/game/game265.jpg', 'Galdriver', '', '《APEX》15万一发平A，武器和技能都是辅助了吧', '', '3-23 08:39:27', '', '1');
INSERT INTO `post` VALUES (4, '2019030414', 'https://image.gamersky.com/avatar/original/game/game266.jpg', '篾匠', '', '《荣耀战魂》让我看看还有多少真爱粉还在坚持！', '', '3-21 23:39:27', '', '1');
INSERT INTO `post` VALUES (5, '2019030415', 'https://image.gamersky.com/avatar/original/game/game267.jpg', '荒唐睡梦', '', '《极限竞速地平线4》大佬们，帮我看看这个有用吗，该怎么配装', '', '3-20 23:39:27', '', '1');
INSERT INTO `post` VALUES (6, '2019030416', 'https://image.gamersky.com/avatar/original/game/game268.jpg', '巴黎塔下', '', '《荣耀战魂》宗师1狂怒2箱2=2来的留id', '', '3-19 23:39:27', '', '1');
INSERT INTO `post` VALUES (7, '2019030417', 'https://image.gamersky.com/avatar/original/game/game269.jpg', '不疼强森', '', '《荒野大镖客2救赎》大表哥玩了四五天，感觉好好，就是不习惯手柄射击', '', '3-18 23:39:27', '', '1');
INSERT INTO `post` VALUES (8, '2019030418', 'https://image.gamersky.com/avatar/original/game/game271.jpg', '狂野咲咲', '', '《全境封锁2》全境封锁2微信联机群', '', '3-17 23:39:27', '', '1');
INSERT INTO `post` VALUES (9, '2019030419', 'https://image.gamersky.com/avatar/original/game/game272.jpg', '疯狂就是力量', '', '《GTA5》通缉任务做不了了，里远还好一里近任务就消失了', '', '3-16 23:39:27', '', '2');
INSERT INTO `post` VALUES (10, '2019030420', 'https://image.gamersky.com/avatar/original/game/game273.jpg', '91-杜先生', '', '《GTA5》玩线上模式 是不是一定要加速器？才可以进去？', '', '3-15 23:39:27', '', '2');
INSERT INTO `post` VALUES (11, '2019030421', 'https://image.gamersky.com/avatar/original/game/game274.jpg', ' 范达克', '', '《GTA5》12级萌新 现在天煞打折了 要不要买一个啊', '', '3-14 23:39:27', '', '2');
INSERT INTO `post` VALUES (12, '2019030422', 'https://image.gamersky.com/avatar/original/game/game275.jpg', '东山樵夫', '', '《极限竞速地平线4》弱弱问一下你们1050全高是怎么60帧的，还开个x4？', '', '3-13 23:39:27', '', '2');
INSERT INTO `post` VALUES (13, '2019030423', 'https://image.gamersky.com/avatar/original/game/game276.jpg', '海德拉丶', '', '《GTA5》震惊，GTA里居然有飞碟', '', '3-12 23:39:27', '', '2');
INSERT INTO `post` VALUES (14, '2019030424', 'https://image.gamersky.com/avatar/original/game/game277.jpg', '归来的黑色维京', '', '《GTA5》这游戏有小姐姐嘛，来一起玩鸭', '', '3-11 23:39:27', '', '2');
INSERT INTO `post` VALUES (15, '2019030425', 'https://image.gamersky.com/avatar/original/game/game278.jpg', '香辣油炸巨蟹', '', '《APEX》现在连超人都出来了？视频绝无任何快进。', '', '3-10 23:39:27', '', '2');
INSERT INTO `post` VALUES (16, '2019030426', 'https://image.gamersky.com/avatar/original/game/game279.jpg', '滑稽一个时代', '', '《APEX》Apex会不会昙花一现', '', '3-09 23:39:27', '', '2');
INSERT INTO `post` VALUES (17, '2019030427', 'https://image.gamersky.com/avatar/original/game/game281.jpg', '九齿钉耙梳头发', '', '《刺客信条：起源》一会游戏更新 具体什么内容？更新了啥？', '', '8-08 23:39:27', '', '3');
INSERT INTO `post` VALUES (18, '2019030428', 'https://image.gamersky.com/avatar/original/game/game282.jpg', '青龙偃月削苹果', '', '《APEX》国外玩家呼吁《Apex英雄》开发商锁国区对抗外挂！', '', '8-07 23:39:27', '', '3');
INSERT INTO `post` VALUES (19, '2019056820', 'https://image.gamersky.com/avatar/original/game/game292.jpg', 'admin', '《极限竞速地平线4》', 'admin', 'I am admin', '3-27 2:26:39', '', '1');

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_publish` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `s_picUrl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `s_linkUrl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `s_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES (1, '20190222_41', 'https://image.gamersky.com/gameshd/2019/20190222_gd_340_41.jpg', 'https://wap.gamersky.com/news/Content-1156362.html', '《鬼泣5》六大BOSS展示 演出十分华丽');
INSERT INTO `slider` VALUES (2, '20190220_71', 'https://image.gamersky.com/gameshd/2019/20190220_gd_340_71.jpg', 'https://wap.gamersky.com/news/Content-1152382.html', '2B小姐姐降临上古卷轴5：天际');
INSERT INTO `slider` VALUES (3, '20190219_4', 'https://imgs.gamersky.com/pic/2019/20190219xtn_162_4.jpg', 'https://wap.gamersky.com/news/Content-1155129.html', '文明DLC：民族尊严如何残害了一代青年？');
INSERT INTO `slider` VALUES (4, '20190217_4', 'https://imgs.gamersky.com/pic/2019/20190217xtn_162_4.jpg', 'https://wap.gamersky.com/news/Content-1154582.html', '这把革命性的步枪 让美国打败了纳粹');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `u_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `u_pwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `u_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `u_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `u_msg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `u_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `u_avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `u_pcount` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, '', 'admin', '1f4646e229872bf607318cbd42ac9f05', 'admin@qq.com', 'member', '', '3-27 2:26:21', 'https://image.gamersky.com/avatar/original/game/game185.jpg', '');

-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `v_linkUrl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `page` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of videos
-- ----------------------------
INSERT INTO `videos` VALUES (1, '//player.bilibili.com/player.html?aid=45629276&cid=79893358&page=1', '1');
INSERT INTO `videos` VALUES (2, '//player.bilibili.com/player.html?aid=21730255&cid=35835873&page=1', '1');
INSERT INTO `videos` VALUES (3, '//player.bilibili.com/player.html?aid=24682355&cid=41500302&page=1', '1');
INSERT INTO `videos` VALUES (4, '//player.bilibili.com/player.html?aid=24722427&cid=41579335&page=1', '1');
INSERT INTO `videos` VALUES (5, '//player.bilibili.com/player.html?aid=13313179&cid=21822470&page=1', '2');
INSERT INTO `videos` VALUES (6, '//player.bilibili.com/player.html?aid=40972276&cid=71969521&page=1', '2');
INSERT INTO `videos` VALUES (7, '//player.bilibili.com/player.html?aid=37593530&cid=66085237&page=1', '2');
INSERT INTO `videos` VALUES (8, '//player.bilibili.com/player.html?aid=18349719&cid=29952310&page=1', '2');
INSERT INTO `videos` VALUES (9, '//player.bilibili.com/player.html?aid=29589314&cid=51458757&page=4', '3');
INSERT INTO `videos` VALUES (10, '//player.bilibili.com/player.html?aid=25348004&cid=43050466&page=1', '3');
INSERT INTO `videos` VALUES (11, '//player.bilibili.com/player.html?aid=23848385&cid=39885299&page=1', '3');
INSERT INTO `videos` VALUES (12, '//player.bilibili.com/player.html?aid=24685663&cid=41506708&page=1', '3');

SET FOREIGN_KEY_CHECKS = 1;
