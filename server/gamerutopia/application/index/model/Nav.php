<?php

namespace app\index\model;

use think\Model;

class Nav extends Model
{
    public function getNavList() {
        $list = $this
                ->field('v_linkUrl,v_title')
                ->select();
        return $list;
    }
}
