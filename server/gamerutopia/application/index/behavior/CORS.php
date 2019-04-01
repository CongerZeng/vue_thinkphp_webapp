<?php
/**
 * Created by PhpStorm.
 * User: Gaoy
 * Date: 2017/12/22
 * Time: 16:13
 */
namespace app\index\behavior;

use think\Response;

class CORS {
/*实现跨域*/
    public function appInit(){
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, X-token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');

        if(request()->isOptions()){
            exit();
        }       
    }
}
