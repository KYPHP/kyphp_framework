<?php 
class ControllerPublicPublic extends  blog{ 
	public function init() {
		$this->data['http']=__WEBURL__;
		$this->assign('sitename','blog example');//���ַ��������$this->data,$this->lable,$this->assign��Ч		
		$this->language('blog/data');
		$sitename=$this->language->get('sitename');
		$this->lable('title',$sitename);
		
  	}
}
?>
