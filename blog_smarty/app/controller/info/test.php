<?php 
class ControllerInfoTest extends Controller { 
	public function index() {
		$this->data['http']=__WEBURL__;
		$this->assign('sitename','blog example');//���ַ��������$this->data,$this->lable,$this->assign��Ч
		$this->data['list']=array();
		$this->data['head_list']=array();
		$this->model('blog/data');
		$test=$this->M['blog/data']->test();
		
		$this->language('blog/data');
		$sitename=$this->language->get('sitename');
		$this->lable('title',$sitename);
		$this->data['test']=$test;//��ģ����$this->data�Ľ�ֵ��Ϊ������
		$this->data['header']=$this->view('public/header');
		$this->data['footer']=$this->view('public/footer');
		$this->data['right']=$this->view('public/right');//�����ұߵ�controller

		$this->display('info/test/info.html');	//��ָ��ģ�壬ģ��Ϊ��ǰcontroll������+����	
  	}
	public function view2(){
	
		echo 'test';
	}
}
?>
