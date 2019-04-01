<?php

namespace app\index\model;

use think\Model;

class User extends Model
{
	private function getpwd($oldpwd,$email) {
		$pwd = md5($oldpwd.$email.'gamerutopia');
		return $pwd;
	}
	public function register($email,$name,$pwd,$avatar,$time) {
		$check = $this
				->where('u_email',$email)
				->whereOr('u_name',$name)
				->find();
		if($check) {
			if($check['u_status']=='member') {
				$msg = '该用户名或邮箱已注册。';
				return [false,$msg];
			} elseif($check['u_status']=='visitor') {
				$msg = '依据以前的足迹，您可直接使用初始密码123456登陆。';
				return [false,$msg];
			} else {
				$msg = '管理员也能忘记密码？';
				return [false,$msg];
			}
		}
		$pwd = $this->getpwd($pwd,$email);
		$data = [
			'u_name'=>$name,
			'u_pwd'=>$pwd,
			'u_status'=>'member',
			'u_avatar'=>$avatar,
			'u_msg'=>'',
			'u_email'=>$email,
			'u_time'=>$time
		];
		$result = $this->insert($data);
		return [$result,'注册失败，网络卡了？'];
	}
	public function login($email,$pwd) {
		$pwd = $this->getpwd($pwd,$email);
		$result = $this->where('u_email',$email)
						->where('u_pwd',$pwd)
						->find();
		return $result;
	}
	public function show_all_user($status) {
		$where = 'u_pwd,u_email';
		if($status) $where = 'u_pwd';
		$result = $this
					->field($where,true)
					->select();
		return $result;
	}
	public function insert_visitor() {
		$name = input('commenter');
		$email = input('commenterEmail');
		//检查数据库是否存在该用户名或邮箱
		$find1 = $this
					->where('u_name',$name)
					->whereOr('u_email',$email)
					->find();
		//检查数据库是否存在对应的用户
		if($find1) {
			$find2 = $this->where('u_email',$email)
				->where('u_name',$name)
				->find();
			if($find2) {
				return true;
			} else {
				return false;
			}
		}
		$data = [
			'u_name' => $name,
			'u_pwd' => $this->getpwd('123456',$email),
			'u_email' =>$email,
			'u_status' => 'visitor',
			'u_time' => date('Y-m-d')
		];
		$result = $this->insert($data);
		return $result;
	}
	public function getUserEmail($name) {
		$email = $this->where('u_name',$name)->value('u_email');
		return $email;
	}
	
	// 获取用户信息
  public function getUserInfo($name) {
		$where = [];
		if($name) $where = ['u_name' => $name];
		$list = $this
						->where($where)
						->field('u_avatar,u_name,u_pcount')
						->select();
    return $list;
	}
	// 获取用户帖子信息
  public function getPostInfo($name) {
		$where = [];
		if($name) $where = ['u_name' => $name];
		$list = $this
						->alias('u')
						->where($where)
						/* 定义别名连接查询 */
						->join('post p','p.p_name = u.u_name')
						->field('p_title,p_time,p_publish')
						->select();
    return $list;
	}
}
