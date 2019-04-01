<?php

namespace app\index\model;

use think\Model;

class Slider extends Model
{
    public function getSlideList() {
        $list = $this
                ->field('s_publish,s_picUrl,s_linkUrl,s_title')
                ->select();
        return $list;
    }
}
