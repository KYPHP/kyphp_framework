<?php

class ModelBlogData extends Model {
	public function test(){
	
		return 'test';
	}
	public function getFormList($data=array()){
		$cache=json_encode($data);
		$result=$this->cache->get($cache);//cache�÷���db����
		if($result)return $result;
		$model=M('form');
		if(!empty($data['limit']))$model->limit($data['limit']);
		$result=$model->select();
		$this->cache->set($cache,$result);
		return $result;
	}
	public function getFormTotal($data=array()){
		$query=$this->_db['mysqli']->query("select count(*) as total from {$this->db->tablename('form')}");
		$total=$query->row['total'];
		//����
		$model=D('form');
		$total2=$model->total();		
		return $total;
	
	}
	public function getInfo($id){
		$model=M('form',$this->_db['pdo']);//�����ݿ�
		
		$result=$model->where("id=".(int)$id)->find();
	
		return $result;
	}

}
?>
