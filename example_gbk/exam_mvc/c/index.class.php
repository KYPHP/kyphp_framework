<?php
class indexAction extends publicAction {
   
   public function _initialize(){
  
   }
   public function index(){
      /*
	   $form=D("form");//����ʵ������
	  
	  $dblist=$form->order('id desc')->select();//���ٻ������
	 */
	 
	  $dblist=$this->model->form();
	  $this->volist("list",$dblist);	
	  $this->load('test');
	  $arr=$this->model_test->sortdata();
	  dump($arr);
	  
      $this->display();

   }
   public function view(){
   /*
   $form=D("form");//����ʵ������
	  
	  $dblist=$form->where('id='.$_GET[id])->find();//���ٻ�õ�������
	 */
	 $dblist=$this->model->view();
	  $this->lable("vo",$dblist);	
	  
	  
      $this->display();
   }
  
}
?>