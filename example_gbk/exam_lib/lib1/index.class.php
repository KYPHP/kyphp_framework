<?php
class indexAction extends publicAction {
   
   public function _initialize(){
  
   }
   public function index(){
       $form=D("form");//����ʵ������
	  
	  $dblist=$form->order('id desc')->select();//���ٻ������
	 
	  $this->volist("list",$dblist);	
	 
	  
      $this->display();

   }
   public function view(){
   $form=D("form");//����ʵ������
	  
	  $dblist=$form->where('id='.$_GET[id])->find();//���ٻ�õ�������
	 
	  $this->lable("vo",$dblist);	
	 
	  
      $this->display();
   }
  
}
?>