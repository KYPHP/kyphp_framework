<?php

class testModel extends Model {
   
  
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
   public function sortdata(){
    $form=D("sort");//����ʵ������
	  
	  $dblist=$form->select();//���ٻ�õ�������
	 
	  return $dblist;
   }
  
  
}
?>