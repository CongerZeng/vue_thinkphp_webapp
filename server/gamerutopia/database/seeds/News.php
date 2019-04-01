<?php

use think\migration\Seeder;

class News extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        //db()方法定义填充数据的表名称，insert()插入数据
        db('news')->insert(['n_publish' => '2019030411',
        'n_title' => '《只狼：影逝二度》Steam特别好评！玩家：死字要不认识了',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903241910416429.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1159187.html',
        'page' => 1]);
        db('news')->insert(['n_publish' => '20190304_12',
        'n_title' => 'Falcom公布《伊苏9》新概念图 游戏今秋发售',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903041105059174.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1159177.html',
        'page' => 1]);
        db('news')->insert(['n_publish' => '20190304_13',
        'n_title' => 'SE新作《Left Alive》口碑扑街 封禁直播近半价促销',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903040950574546.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1159113.html',
        'page' => 1]);
        db('news')->insert(['n_publish' => '20190304_14',
        'n_title' => '《实况足球》X前锋阿德里亚诺 “国王”重返绿茵',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903041001356620.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1159140.html',
        'page' => 1]);
        db('news')->insert(['n_publish' => '20190304_15',
        'n_title' => 'Steam周销量排行榜：人类黎明成功登顶 PUBG排第二',
        'n_picUrl' => 'https://imgs.gamersky.com/pic/2016/20160110_zy_71_1.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1159106.html',
        'page' => 1]);
        db('news')->insert(['n_publish' => '20190304_16',
        'n_title' => '部分《圣歌》玩家找索尼退款成功 崩溃关机担心变砖',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903040843594175.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1159107.html',
        'page' => 1]);
        db('news')->insert(['n_publish' => '20190304_17',
        'n_title' => '《天外世界》没钱做长流程 所有地图非程序生成',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903031746169812.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1159082.html',
        'page' => 1]);
        db('news')->insert(['n_publish' => '20190304_18',
        'n_title' => '腾讯发《彩六围攻》调查问卷：玩这游戏您充钱吗？',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903041741101666.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1159379.html',
        'page' => 1]);
        db('news')->insert(['n_publish' => '20190304_21',
        'n_title' => '《永远毁灭公爵》开发商将迎新作 雷神之锤引擎打造',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903071042233259.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1160397.html',
        'page' => 2]);
        db('news')->insert(['n_publish' => '20190304_22',
        'n_title' => '《Apex英雄》迎平衡改动 辅助手枪和和平捍卫者遭削',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903071024214595.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1160373.html',
        'page' => 2]);
        db('news')->insert(['n_publish' => '20190304_23',
        'n_title' => '《全境封锁2》真人预告公布 历史会铭记一切',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903070941031003.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1160320.html',
        'page' => 2]);
        db('news')->insert(['n_publish' => '20190304_24',
        'n_title' => '《只狼：影逝二度》新杂志扫图 更多官方截图公布',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903070913259252.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1160292.html',
        'page' => 2]);
        db('news')->insert(['n_publish' => '20190304_25',
        'n_title' => '《圣歌》武器系统出BUG 真人快打11新宣传片',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2018/201805050722286918.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1160287.html',
        'page' => 2]);
        db('news')->insert(['n_publish' => '20190304_19',
        'n_title' => '《全境封锁2》中的满级专家武器现实到底多可怕？',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903041603152288.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1159307.html',
        'page' => 2]);
        db('news')->insert(['n_publish' => '20190304_20',
        'n_title' => '《LOL》VEG战队拖延时间被警告 再遇女队13分钟取胜',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903041509527130.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1159267.html',
        'page' => 2]);
        db('news')->insert(['n_publish' => '20190304_26',
        'n_title' => '《地铁：离去》开发商：一群乌克兰来的斯巴达勇士',
        'n_picUrl' => 'https://imgs.gamersky.com/pic/2019/20190307xtn_162_1.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1160622.html',
        'page' => 2]);
        db('news')->insert(['n_publish' => '20190305_01',
        'n_title' => '你最喜欢哪款女性为主角的游戏？',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903082134314161.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1161180.html',
        'page' => 3]);
        db('news')->insert(['n_publish' => '20190305_02',
        'n_title' => '玩家挖掘《Apex英雄》数据：有望加入昼夜交替模式',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903082157536947.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1161182.html',
        'page' => 3]);
        db('news')->insert(['n_publish' => '20190305_03',
        'n_title' => 'NV公布“吃鸡类游戏”研究：旗舰显卡高帧数K/D更高',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903082043456939.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1161176.html',
        'page' => 3]);
        db('news')->insert(['n_publish' => '20190305_04',
        'n_title' => '设计师暗示《守望》下一个英雄能飞 可能是女性智械',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903081942199813.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1161169.html',
        'page' => 3]);
        db('news')->insert(['n_publish' => '20190305_05',
        'n_title' => '不经意间发现暗藏的玄机 《鬼泣5》全隐藏关卡攻略',
        'n_picUrl' => 'https://imgs.gamersky.com/pic/2018/20180704_wxt_439_1.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/gl/Content-1160681.html',
        'page' => 3]);
        db('news')->insert(['n_publish' => '20190305_06',
        'n_title' => '《八方旅人》今年推手游 单人游玩RPG、无自动战斗',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903081435433908.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1161007.html',
        'page' => 3]);
        db('news')->insert(['n_publish' => '20190305_07',
        'n_title' => '《战地5》大逃杀模式教学泄露 倒地后仍可射击',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903081016029752.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1161180.html',
        'page' => 3]);
        db('news')->insert(['n_publish' => '20190305_08',
        'n_title' => '“惊奇队长”定制款Xbox 转发原推有机会免费得',
        'n_picUrl' => 'https://imgs.gamersky.com/upimg/2019/201903081031046892.jpg',
        'n_linkUrl' => 'https://wap.gamersky.com/news/Content-1161182.html',
        'page' => 3]);
    }
}