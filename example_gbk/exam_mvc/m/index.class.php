<?php

class indexModel extends Model {
   
  
   public function form(){
       $form=D("form");//����ʵ������
	  
	  $dblist=$form->order('id desc')->select();//���ٻ������
	 
	  return $dblist;

   }
   public function view(){
       $form=D("form");//����ʵ������
	  
	  $dblist=$form->where('id='.$_GET[id])->find();//���ٻ�õ�������
	 
	  return $dblist;

   }
  
  
}
?>