<?php

use think\migration\Seeder;

class Post extends Seeder
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
        db('post')->insert(['p_publish' => '2019030411',
        'p_name' => '高压电线奏东风',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game264.jpg',
        'p_title' => '《荣耀战魂》个人觉得设计最成功的角色',
        'p_time' => '3-24 23:39:27',
        'p_picUrl' => '',
        'page' => 1]);
        db('post')->insert(['p_publish' => '2019030412',
        'p_name' => '传国玉玺砸核桃',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game314.jpg',
        'p_title' => '《极限竞速地平线4》萌新求莱肯原版尾翼的调教',
        'p_time' => '3-24 20:39:27',
        'p_picUrl' => '',
        'page' => 1]);
        db('post')->insert(['p_publish' => '2019030413',
        'p_name' => 'Galdriver',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game265.jpg',
        'p_title' => '《APEX》15万一发平A，武器和技能都是辅助了吧',
        'p_time' => '3-23 08:39:27',
        'p_picUrl' => '',
        'page' => 1]);
        db('post')->insert(['p_publish' => '2019030414',
        'p_name' => '篾匠',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game266.jpg',
        'p_title' => '《荣耀战魂》让我看看还有多少真爱粉还在坚持！',
        'p_time' => '3-21 23:39:27',
        'p_picUrl' => '',
        'page' => 1]);
        db('post')->insert(['p_publish' => '2019030415',
        'p_name' => '荒唐睡梦',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game267.jpg',
        'p_title' => '《极限竞速地平线4》大佬们，帮我看看这个有用吗，该怎么配装',
        'p_time' => '3-20 23:39:27',
        'p_picUrl' => '',
        'page' => 1]);
        db('post')->insert(['p_publish' => '2019030416',
        'p_name' => '巴黎塔下',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game268.jpg',
        'p_title' => '《荣耀战魂》宗师1狂怒2箱2=2来的留id',
        'p_time' => '3-19 23:39:27',
        'p_picUrl' => '',
        'page' => 1]);
        db('post')->insert(['p_publish' => '2019030417',
        'p_name' => '不疼强森',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game269.jpg',
        'p_title' => '《荒野大镖客2救赎》大表哥玩了四五天，感觉好好，就是不习惯手柄射击',
        'p_time' => '3-18 23:39:27',
        'p_picUrl' => '',
        'page' => 1]);
        db('post')->insert(['p_publish' => '2019030418',
        'p_name' => '狂野咲咲',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game271.jpg',
        'p_title' => '《全境封锁2》全境封锁2微信联机群',
        'p_time' => '3-17 23:39:27',
        'p_picUrl' => '',
        'page' => 1]);
        db('post')->insert(['p_publish' => '2019030419',
        'p_name' => '疯狂就是力量',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game272.jpg',
        'p_title' => '《GTA5》通缉任务做不了了，里远还好一里近任务就消失了',
        'p_time' => '3-16 23:39:27',
        'p_picUrl' => '',
        'page' => 2]);
        db('post')->insert(['p_publish' => '2019030420',
        'p_name' => '91-杜先生',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game273.jpg',
        'p_title' => '《GTA5》玩线上模式 是不是一定要加速器？才可以进去？',
        'p_time' => '3-15 23:39:27',
        'p_picUrl' => '',
        'page' => 2]);
        db('post')->insert(['p_publish' => '2019030421',
        'p_name' => ' 范达克',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game274.jpg',
        'p_title' => '《GTA5》12级萌新 现在天煞打折了 要不要买一个啊',
        'p_time' => '3-14 23:39:27',
        'p_picUrl' => '',
        'page' => 2]);
        db('post')->insert(['p_publish' => '2019030422',
        'p_name' => '东山樵夫',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game275.jpg',
        'p_title' => '《极限竞速地平线4》弱弱问一下你们1050全高是怎么60帧的，还开个x4？',
        'p_time' => '3-13 23:39:27',
        'p_picUrl' => '',
        'page' => 2]);
        db('post')->insert(['p_publish' => '2019030423',
        'p_name' => '海德拉丶',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game276.jpg',
        'p_title' => '《GTA5》震惊，GTA里居然有飞碟',
        'p_time' => '3-12 23:39:27',
        'p_picUrl' => '',
        'page' => 2]);
        db('post')->insert(['p_publish' => '2019030424',
        'p_name' => '归来的黑色维京',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game277.jpg',
        'p_title' => '《GTA5》这游戏有小姐姐嘛，来一起玩鸭',
        'p_time' => '3-11 23:39:27',
        'p_picUrl' => '',
        'page' => 2]);
        db('post')->insert(['p_publish' => '2019030425',
        'p_name' => '香辣油炸巨蟹',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game278.jpg',
        'p_title' => '《APEX》现在连超人都出来了？视频绝无任何快进。',
        'p_time' => '3-10 23:39:27',
        'p_picUrl' => '',
        'page' => 2]);
        db('post')->insert(['p_publish' => '2019030426',
        'p_name' => '滑稽一个时代',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game279.jpg',
        'p_title' => '《APEX》Apex会不会昙花一现',
        'p_time' => '3-09 23:39:27',
        'p_picUrl' => '',
        'page' => 2]);
        db('post')->insert(['p_publish' => '2019030427',
        'p_name' => '九齿钉耙梳头发',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game281.jpg',
        'p_title' => '《刺客信条：起源》一会游戏更新 具体什么内容？更新了啥？',
        'p_time' => '8-08 23:39:27',
        'p_picUrl' => '',
        'page' => 3]);
        db('post')->insert(['p_publish' => '2019030428',
        'p_name' => '青龙偃月削苹果',
        'p_avatar' => 'https://image.gamersky.com/avatar/original/game/game282.jpg',
        'p_title' => '《APEX》国外玩家呼吁《Apex英雄》开发商锁国区对抗外挂！',
        'p_time' => '8-07 23:39:27',
        'p_picUrl' => '',
        'page' => 3]);
    }
}