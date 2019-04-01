<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Article extends Controller
{
    /*获取文章内容*/
    public function getArticle(){
        $result = model('Article')->getArticleList();
        if($result) {
            return $result;
        }
    }
}
