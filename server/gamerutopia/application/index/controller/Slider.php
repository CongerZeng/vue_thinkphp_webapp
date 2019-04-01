<?php

namespace app\index\controller;

use think\Controller;

class Slider extends Controller
{
    /*获取滑动器幻灯片*/
    public function getSlide(){
        $result = model('Slider')->getSlideList();
        if($result) {
            return $result;
        }
    }
}
