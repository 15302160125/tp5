<?php 
	namespace app\common\model;
	use think\Model;
	class Course extends Model{
		public function getCourse()
		{
			//$order=['id'=>'asc'];
			//return $this->order($order)->select();
			$pagesize=1;
			return $this->paginate($pagesize);
		}
	}
?>