<?php

namespace app\Index\controller;

use think\Controller;

class Comment extends Controller
{
    // 获取评论
    public function getPostComment() {
        $publish = input('publish');
        $postInfo = model('Comment')->getPostContent($publish);
        $commentInfo = model('Comment')->getPostComment($publish);
        $result = ['postInfo' => $postInfo,'commentInfo' => $commentInfo];
        if($result) {
            return $result;
        }
    }

    /*发表评论*/
	public function addComment() {
        $data = [];
		$data['c_publish'] = input('publish');
		$data['c_name'] = input('name');
		$data['c_comment'] = input('comment');
		$data['c_time'] = input('time');
        $result = model('Comment')->addComment($data);
        if ($result) {
            return $result;
        }
	}
}
