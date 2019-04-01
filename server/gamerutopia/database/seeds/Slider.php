<?php

use think\migration\Seeder;

class Slider extends Seeder
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
        db('slider')->insert(['s_publish' => '20190222_41',
        's_title' => '《鬼泣5》六大BOSS展示 演出十分华丽',
        's_picUrl' => 'https://image.gamersky.com/gameshd/2019/20190222_gd_340_41.jpg', //直接用游民星空的图片
        's_linkUrl' => 'https://wap.gamersky.com/news/Content-1156362.html']);
        db('slider')->insert(['s_publish' => '20190220_71',
        's_title' => '2B小姐姐降临上古卷轴5：天际',
        's_picUrl' => 'https://image.gamersky.com/gameshd/2019/20190220_gd_340_71.jpg',
        's_linkUrl' => 'https://wap.gamersky.com/news/Content-1152382.html']);
        db('slider')->insert(['s_publish' => '20190219_4',
        's_title' => '文明DLC：民族尊严如何残害了一代青年？',
        's_picUrl' => 'https://imgs.gamersky.com/pic/2019/20190219xtn_162_4.jpg',
        's_linkUrl' => 'https://wap.gamersky.com/news/Content-1155129.html']);
        db('slider')->insert(['s_publish' => '20190217_4',
        's_title' => '这把革命性的步枪 让美国打败了纳粹',
        's_picUrl' => 'https://imgs.gamersky.com/pic/2019/20190217xtn_162_4.jpg',
        's_linkUrl' => 'https://wap.gamersky.com/news/Content-1154582.html']);
    }
}