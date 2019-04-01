<?php

namespace app\index\model;

use think\Model;

class Post extends Model
{
    // 获取所有帖子
    public function getPostList($page) {
        $where = [];
        if($page) $where = ['page'=>$page];
        $list = $this
                ->where($where)
                ->order('p_time desc')
                ->field('p_publish,p_avatar,p_name,p_title,p_time,page')
                ->select();
        return $list;
    }
    
    // 增加帖子
    public function addPost($data) {
		$result = $this
			    ->insert($data);
		return $result;
    }
    
    // 删除帖子
    public function delPost($postTitle) {
		$result = $this
		            ->where('p_title',$postTitle)
					->delete();
		return $result;
	}
}
