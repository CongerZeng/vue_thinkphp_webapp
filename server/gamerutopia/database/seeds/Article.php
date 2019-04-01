<?php

use think\migration\Seeder;

class Article extends Seeder
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
        db('article')->insert([
            'a_publish'=>'2019032511',
            'a_authorname'=>'Zephyr',
            'a_title'=>'《只狼：影逝二度》Steam特别好评！玩家大赞：死字都要不认识了',
            'a_content'=>'《只狼：影逝二度》已于昨日深夜正式解锁，翘首以盼的玩家终于开启了抖M之旅，相信有不少人都受苦受到了凌晨，获得了媒体一致好评的《只狼》在玩家群中同样备受推崇，该作在Steam上的玩家评价目前为特别好评。已经习惯并且享受着宫崎英高祖传虐心虐身模式的玩家在《只狼》中被一个大大的“死”字疯狂刷屏，不少在Steam的游戏评价区哀嚎，直呼几个小时死下来都要不认识“死”字怎么写了',
            'a_img'=>'https://img1.gamersky.com/image2019/03/20190322_ll_red_136_1/gamersky_01small_02_2019322942B9A.jpg'
        ]);
    }
}