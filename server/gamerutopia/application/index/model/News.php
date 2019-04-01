<?php

namespace app\index\model;

use think\Model;

class News extends Model
{
    public function getNewsList($page) {
        $where = [];
        if($page) $where = ['page'=>$page];
        $list = $this
                ->where($where)
                ->field('n_publish,n_picUrl,n_linkUrl,n_title,page')
                ->select();
        return $list;
    }
}
