<?php

use think\migration\Seeder;

class Videos extends Seeder
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
        db('videos')->insert([
        'v_linkUrl' => '//player.bilibili.com/player.html?aid=45629276&cid=79893358&page=1',
        'page' => 1]);
        db('videos')->insert([
        'v_linkUrl' => '//player.bilibili.com/player.html?aid=21730255&cid=35835873&page=1',
        'page' => 1]);
        db('videos')->insert([
        'v_linkUrl' => '//player.bilibili.com/player.html?aid=24682355&cid=41500302&page=1',
        'page' => 1]);
        db('videos')->insert([
        'v_linkUrl' => '//player.bilibili.com/player.html?aid=24722427&cid=41579335&page=1',
        'page' => 1]);
        db('videos')->insert([
        'v_linkUrl' => '//player.bilibili.com/player.html?aid=13313179&cid=21822470&page=1',
        'page' => 2]);
        db('videos')->insert([
        'v_linkUrl' => '//player.bilibili.com/player.html?aid=40972276&cid=71969521&page=1',
        'page' => 2]);
        db('videos')->insert([
        'v_linkUrl' => '//player.bilibili.com/player.html?aid=37593530&cid=66085237&page=1',
        'page' => 2]);
        db('videos')->insert([
        'v_linkUrl' => '//player.bilibili.com/player.html?aid=18349719&cid=29952310&page=1',
        'page' => 2]);
        db('videos')->insert([
        'v_linkUrl' => '//player.bilibili.com/player.html?aid=29589314&cid=51458757&page=4',
        'page' => 3]);
        db('videos')->insert([
        'v_linkUrl' => '//player.bilibili.com/player.html?aid=25348004&cid=43050466&page=1',
        'page' => 3]);
        db('videos')->insert([
        'v_linkUrl' => '//player.bilibili.com/player.html?aid=23848385&cid=39885299&page=1',
        'page' => 3]);
        db('videos')->insert([
        'v_linkUrl' => '//player.bilibili.com/player.html?aid=24685663&cid=41506708&page=1',
        'page' => 3]);
    }
}