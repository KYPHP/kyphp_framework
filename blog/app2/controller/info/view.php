<?php 
class ControllerInfoView extends ControllerPublicPublic  { 
	public function index() {
	
		$this->model('blog/data');
		
		$info=$this->M['blog/data']->getInfo(isset($this->request->get['id'])?$this->request->get['id']:0);
		$this->data['info_title']=$info['title'];
		$this->data['content']=$info['content'];
		$this->data['header']=$this->view('public/header');
		$this->data['footer']=$this->view('public/footer');
		$this->data['right']=$this->view('public/right');//�����ұߵ�controller
		$this->data['bloginfo']=$this->blog;//�̳����Զ�����blog
		$this->data['bloginfo2']=$this->custom('custom')->blog;//�����Զ�����
		$this->display('info/view.html');	//��ָ��ģ�壬ģ��Ϊ��ǰcontroll������+����	
  	}
}
?>
