<?php

use think\migration\Seeder;

class Nav extends Seeder
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
        db('nav')->insert(['v_publish' => '20190222_1',
        'v_title' => '《守望先锋》新英雄来袭，黑爪超强奶爸？',
        'v_linkUrl' => 'https://wap.gamersky.com/news/Content-1156201.html']);
        db('nav')->insert(['v_publish' => '20190222_2',
        'v_title' => '《圣歌》IGN评分6.5 剧情乏味 优化平衡欠佳',
        'v_linkUrl' => 'https://wap.gamersky.com/news/Content-1156169.html']);
    }
}