<?php

namespace app\index\controller;

use think\Controller;

class Videos extends Controller
{
    //
     /*获取所有视频*/
     public function getVideos($page=null){ // page为参数，进行筛选
        $result = model('Videos')->getVideosList($page);
        if($result) {
            return jsonp(['code'=>'200','itemList'=>$result,'currentPage'=>$page,'totalPage'=>2]);
        }
    }
    /*提供刷新视频*/
    public function getUpdateVideos($page=null){ // page为参数，进行筛选
        $result = model('Videos')->getVideosList($page);
        if($result) {
            return jsonp(['code'=>'200','itemList'=>$result,'currentPage'=>$page,'totalPage'=>1]);
        }
    }
}
