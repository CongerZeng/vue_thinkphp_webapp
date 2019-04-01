<?php

namespace app\index\controller;

use think\Controller;

class Post extends Controller
{
    /*获取所有帖子*/
    public function getPost($page=null){ // page为参数，进行筛选
        $result = model('Post')->getPostList($page);
        if($result) {
            return jsonp(['code'=>'200','itemList'=>$result,'currentPage'=>$page,'totalPage'=>2]);
        }
    }
    /*提供刷新帖子数据*/
    public function getUpdatePost($page=null){ // page为参数，进行筛选
        $result = model('Post')->getPostList($page);
        if($result) {
            return jsonp(['code'=>'200','itemList'=>$result,'currentPage'=>$page,'totalPage'=>1]);
        }
    }

    /* 发布帖子 */
    public function addPost() {
        $data = [];
        $data['p_publish'] = rand(2019030429,2020030429);
        $data['p_avatar'] = 'https://image.gamersky.com/avatar/original/game/game292.jpg';
        $data['p_name'] = input('name');
        $data['p_section'] = input('section');
        $data['p_title'] = input('title');
        $data['p_content'] = input('content');
        $data['p_time'] = input('time');
        $data['p_picUrl'] = '';
        $data['page'] = 1;
        $result = model('Post')->addPost($data);
        if ($result) {
            return $result;
        }
    }

    /* 删除帖子 */
    public function delPost() {
        $postTitle = input('postTitle');
		 $result = model('Post')->delPost($postTitle);
		 if($result) {
		 	return $result;
		 }
    }
}
