<?php 
	namespace app\index\controller;
	use think\Controller;
	use app\common\model\Course;
	class CourseController extends Controller{
		public function index()
		{
			$Course=new Course;
			$courses=$Course->getCourse();
			$cou=$this->assign('courses',$courses);
			return $this->fetch();
		}
	}
?>