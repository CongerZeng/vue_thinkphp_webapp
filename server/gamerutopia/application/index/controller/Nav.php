<?php

namespace app\index\controller;

use think\Controller;

class Nav extends Controller
{
    /*获取导航文章*/
    public function getNav(){
        $result = model('Nav')->getNavList();
        if($result) {
            return $result;
        }
    }
}
