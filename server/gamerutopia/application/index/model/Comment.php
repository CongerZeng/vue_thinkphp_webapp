<?php

namespace app\Index\model;

use think\Model;

class Comment extends Model
{
    // 获取帖子内容
    public function getPostContent($publish) {
        $where = [];
        if($publish) $where = ['c_publish' => $publish];
        $list = $this
                ->alias('c')
                ->where($where)
                ->join('post p','p.p_publish = c.c_publish') // 连接post表，通过publish来查询帖子内容
                ->field('p_publish,p_avatar,p_name,p_title,p_time,p_content') // 查询发帖者者的名字，时间，内容
                ->select();
        return $list;
    }
    
    // 获取帖子评论
    public function getPostComment($publish) {
        $where = [];
        if($publish) $where = ['c_publish' => $publish];
        $list = $this
                ->alias('c')
                ->where($where)
                ->join('user u','u.u_name = c.c_name') // 通过c_name来查询用户头像
                ->field('u_avatar,c_name,c_comment,c_time') // 查询评论者的名字，时间，内容
                ->select();
        return $list;
    }

    // 发表评论
    public function addComment($data) {
		$result = $this
			    ->insert($data);
		return $result;
    }
}
