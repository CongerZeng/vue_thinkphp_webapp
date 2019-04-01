<?php

namespace app\index\model;

use think\Model;

class Article extends Model
{
    public function getArticleList() {
        $list = $this
                ->field('a_authorname,a_title,a_content,a_img')
                ->select();
        return $list;
    }
}
