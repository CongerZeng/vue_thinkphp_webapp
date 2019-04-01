<?php

namespace app\index\model;

use think\Model;

class Videos extends Model
{
    //
    public function getVideosList($page) {
        $where = [];
        if($page) $where = ['page'=>$page];
        $list = $this
                ->where($where)
                ->field('v_linkUrl,page')
                ->select();
        return $list;
    }
}
