<?php 
class ControllerPublicHeader  extends  Controller{ 
	public function index() {
		$this->data['http']=__WEBURL__;
		$this->assign('sitename','blog example');//���ַ��������$this->data,$this->lable,$this->assign��Ч		
		$this->language('blog/data');
		$this->data['test']='this is head var test';
		$sitename=$this->language->get('sitename');
		$this->lable('title',$sitename);		
		$this->data['sitetitle']='BLOG -KYPHP';
		$this->render('public/header.html');	//��ָ��ģ�壬ģ��Ϊ��ǰcontroll������+����	
  	}
}
?>
