<?php
class indexAction extends publicAction {
   
   public function _initialize(){
  
   }
   public function index(){
    
	 
	  $form=$this->db->query("select * from ".$this->db->dbpre."sort");
	  $dblist2=array();
	  foreach( $form as $dbarr){	 
	  $dblist[]=$dbarr;
	  if(isset($dbarr['parentid'])&&$dbarr['parentid']!=0)$dblist2[$dbarr['parentid']][]=$dbarr;
	  }
	 
	 
	  $this->volist("list",$dblist,"list2",$dblist2);	
	  
	  
      $this->display();

   }
   public function subpage(){
     
      $form=D("sort");//����ʵ������
	  
	  $dblist=$form->select();//���ٻ������
	 
	  $this->volist("list",$dblist);	
	  
	  
      $this->display();

   }
	
}
?>