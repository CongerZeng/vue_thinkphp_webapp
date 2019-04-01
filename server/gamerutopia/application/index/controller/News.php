<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class News extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function _initialize() {

    }
    /*获取所有新闻*/
    public function getNews($page=null){ // page为参数，进行筛选
        $result = model('News')->getNewsList($page);
        if($result) {
            return jsonp(['code'=>'200','itemList'=>$result,'currentPage'=>$page,'totalPage'=>2]);
        }
    }
    /*提供刷新新闻*/
    public function getUpdateNews($page=null){ // page为参数，进行筛选
        $result = model('News')->getNewsList($page);
        if($result) {
            return jsonp(['code'=>'200','itemList'=>$result,'currentPage'=>$page,'totalPage'=>1]);
        }
    }
}
