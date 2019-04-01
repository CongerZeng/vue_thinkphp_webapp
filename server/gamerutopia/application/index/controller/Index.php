<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    private $check = [];//存储用户登录状态及身份
    public function _initialize() {
        $this->check = action('User/check_login');
    }
    public function index()
    {
        $data = [];//存储返回客户端的数据
        $status = false;//用于后台判断访客身份权限
        if(isset($this->check['check_status'])) {
            $status = $this->check['check_status']=='admin'?true:false;
            $data['login'] = $this->check['check_success'];
        }
        $data['result'] = false;
        $data['data'] = false;
        $act = input();
        if(empty($act['act'])) $act['act']='';
        switch($act['act']) {
            /* user操作 */
            case 'check_login'://检查用户登录情况
                $data['data'] = action('User/check_login');
				break;
			case 'register'://注册账号
				$data['data'] = action('User/register');
				break;
			case 'login'://登录验证
				$data['data'] = action('User/login');
                break;
            case 'get'://获取用户信息
                $data['data'] = action('User/getUserInfo');
                break;
            /* 帖子操作 */
            case 'addPost'://发布帖子
                $data['data'] = action('Post/addPost');
                break;
            case 'delPost'://删除帖子
                $data['data'] = action('Post/delPost');
                break;
            /* 评论操作 */
            case 'comment'://获取跳转的帖子内容
                $data['data'] = action('Comment/getPostComment');
                break;
            case 'addComment'://获取跳转的帖子内容
                $data['data'] = action('Comment/addComment');
            break;
        }
        if(isset($data['data'])){
			if($data['data']) $data['result'] = true;
		}
		if(!$status && !$data['data']) {
			$data['error'] = 1;//错误代码1：权限不足
		}
        return $data;
    }
}
