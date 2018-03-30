<?php
namespace app\index\controller;

use think\Controller;  //1 引入
class TeacherController extends Controller{  //2继承
	public function index()
	{
		$pagesize=1;
	   	$teachers= model('Teacher')->paginate($pagesize);
	  	//$this->assign('teachers',$teachers);
     	//return $this->fetch();
     	
	   return $this->fetch('',['teachers'=>$teachers]);
	}
	public function hi()//index.html
	{
		return $this->fetch('test@test/hello');
	}
}