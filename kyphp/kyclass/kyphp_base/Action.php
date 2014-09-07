<?php
// +----------------------------------------------------------------------
// ���ݵ�php���
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.ky53.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.ky53.net )
// +----------------------------------------------------------------------

/**
 
 * @author   qq:974005652(zhx626@126.com) by����ͯ
 * @version  2.0
 +------------------------------------------------------------------------------
 */
class Action {
	public $data=array();
	public $kyphp_route='index/index';
  	public function __construct($KYPHP,$k,$route=false) {
		$this->_init_time();
		$this->kyphp_route=isset($_GET['k'])?$_GET['k']:DEFAULT_MODULE;
		$this->kyphp=$KYPHP;
		foreach($KYPHP as $key=>$value){
		
			$this->$key=$value;
		}
		if($route)$this->kyphp_route=$route;
		 $urlarr=explode("/",$this->kyphp_route);
		$j=0;
		if(count($urlarr>3))foreach($urlarr as $key=>$i){
			if($j%2!=1){
				if($key>1)$_GET[$i]=isset($urlarr[$j+1])?$urlarr[$j+1]:'';
			}
	 
			$j++;
		}
		$urlpath_array=array(1,2,4,5);
		if(in_array($KYPHP->config->get('PATH_KEY'),$urlpath_array)){
			$uri=$_SERVER['REQUEST_URI'];
			if(strstr($uri,'?')){
				$wenum=strpos($uri,'?');
				$urlars=substr($uri,$wenum+1);
				$urlars=str_replace('&amp;','&',$urlars);
				$urlargs=explode('&',$urlars);
				if($urlargs)foreach($urlargs as $urlvalue){
					$urlagrsand=explode('=',$urlvalue);
					if($urlagrsand)$_GET[$urlagrsand[0]]=isset($urlagrsand[1])?$urlagrsand[1]:'';
					if($_GET)$this->request->get=$_GET;
				}
			
			}
		
		}
		
		
		$this->class_info=$k;
		$modelclassfile=DEFAULT_M_PATH.'/'.$k['file'].'.class.php';
		if(is_file($modelclassfile)){
			$model=$k['file'].'Model';
			require_once($modelclassfile);
			
			$this->model=new $model($KYPHP);
		}
		$this->_initialize();
		$this->init();
		$this->db();
		
	}
	public function _initialize(){}
	public function init(){}
	public function db(){}
	public function assign($key,$value){

		$this->data[$key]=$value;
	
	}
	public function custom($class){
		return new $class;
	}
	public function load($file){
	
	 if(file_exists(DEFAULT_M_PATH."/$file.class.php"))require_once DEFAULT_M_PATH."/$file.class.php";
	 if(!class_exists($file.'Model'))error(2,$file.'Model');
	 $filemodel='model_'.$file;
	 $filemodelclass=$file.'Model';
	 $this->$filemodel=new $filemodelclass($this->kyphp);
	}
	public function model($file){
		
	 if(file_exists(DEFAULT_M_PATH."/{$file}.php"))require_once DEFAULT_M_PATH."/{$file}.php";
		$classname = 'Model' . preg_replace('/[^a-zA-Z0-9]/', '', $file);
		
	 if(!class_exists($classname))error(2,$classname);
	 
	 $this->M[$file]=new $classname($this->kyphp);
	}
	public function language($language){
		
		$this->language->load($language);
	}
	public function view($k){
	 if(file_exists(DEFAULT_C_PATH."/{$k}.php"))require_once DEFAULT_C_PATH."/{$k}.php";

		$c='Controller'.preg_replace('/[^a-zA-Z0-9]/','',$k);
		$urls=explode('/',$k);
		$url_class=array('action'=>$urls[0],'file'=>$urls[1],'method'=>'index');
		$view=new $c($this->kyphp,$url_class,$k);
		$view->index();
		$content=$view->response->output;
		
		return $content;
	}
	public function render($view=''){
		$content=$this->display($view,true);
		$this->response->setOutput($content);
		return $content;
	
	}
	public function display($view='',$return=false){
	global $lable,$list,$datalist,$volist,$data;
	
	
	$file=$this->class_info['method'];
	
	$clas=$this->class_info['file'];
	 
	 
	
	
	$tpl=$this->config->get('DEFAULT_TPL');
	if(!$tpl)$tpl='default';
	if(COOKIE::get('default_tpl'))$tpl=COOKIE::get('default_tpl');
	if(!defined('DEFAULT_TPL'))define('DEFAULT_TPL',$tpl);
	$data=$this->data;
	$templete_ext=$this->config->get('templete_ext');
	if(!$templete_ext)$templete_ext='.htm';
	$v=$clas."/".$file.$templete_ext;
	if($view)$v=$view;
	$file=DEFAULT_TPL_PATH."/{$tpl}/".$v;
	
	if($this->config->get('templete_mode')=='smarty'){
		if(is_file($file)){
			$this->smarty=new KYSmarty($this);
			
			foreach($this->data as $key=>$value){
				$this->smarty->assign($key,$value);			
			}
			
			$content=$this->smarty->fetch($file);
			$content=php_exe($content,$obj=$this,$this->data);
			
		}
		
		
		 
		
	}else{
	
	ob_start();	
	
	foreach($this->data as $kyphp_key=>$kyphp_value){
		if(is_string($kyphp_value)){$lable[$kyphp_key]=$kyphp_value;}
		$$kyphp_key=$kyphp_value;
	
	}

	if(is_file($file)){
		require($file);	
	}else{
		error(0,$file);
	}
	
		$content=ob_get_contents();
		ob_end_clean();	
		$content=make_html($content,$this->config->get('PATH_KEY'));	
	}

		
		if($this->config->get('PATH_KEY')==4){ 
			$htmlpath=$this->config->get('DEFAULT_HTML_PATH');
			if(!$htmlpath)$htmlpath='html';
			$fstr=APP_PATH.'/'.$htmlpath;
			$fstr.='/'.$this->kyphp_route;
			
			if(!is_dir($fstr))mkdir($fstr,0755, true);
			$f=fopen($fstr.'/index.html','w');
			fwrite($f,$content);
			fclose($f);
			
	}

		if($this->config->get('CACHE_ON')=='on'){
			$urlcachekey='KYPHP_URL'.$_SERVER['REQUEST_URI'];
			$urlcache=array('dirver'=>'file');
			$kyphpcache=new Cache($urlcache);
			$timeout=3600;
			if($this->config->get('CACHE_TIME_EXPIRE'))$timeout=$this->config->get('CACHE_TIME_EXPIRE');
			if($this->config->get('CACHE_CONTENT_WITHTIME')!='off'){
				if(!$this->config->get('CACHE_CONTENT_WITHTIME')){
					$content=$content.'<!--cached '.date('Y-m-d H:i:s').' by KYPHP-->';
				}else{
					$content=$content.$this->config->get('CACHE_CONTENT_WITHTIME');
				}

			}
			
			$kyphpcache->set($urlcachekey,$content,$timeout);			
		
		}
	
	  if($return){
		   
		 return $content;
	  }else{ 
		 
		 echo $content;
	  }
		
	  $this->debugtrace();
	
	}
	public function debugtrace(){
		if($this->config->get('debug')=='on'){
		  $debug=debug_backtrace();
			echo '<div>Debug Trace:<br><ul>';
			global $_charset;
			
			/*
			foreach($debug as $key=>$value){
	
				echo "<li>file:{$value['file']} ".sprintf($_charset['lineno'],$value['line'])." {$value['function']}</li>";
			}*/
			showdebuglist( $debug);
			echo '</ul></div>';
			$this->runtime->stop();
			$GLOBALS['debug_spent_time']=$this->runtime->spent();
			/*
			foreach($GLOBALS['debug_class_time'] as $classname=>$time){
				echo "Time: The class $classname spent is $time (ms)<br>";
			
			}
			echo "<div>Time: Total spent is ".$this->runtime->spent()." (ms)</div>";
			*/
			
	  
	  }
	
	
	}
	public function lable($name,$txt){
		global $lable;		
		$lable[$name]=$txt;	
		$this->data['kysmarty']['lable']=$lable;
	}
	public function volist($name,$txt,$name1='',$txt1=''){
	global $volist,$list;
	
	$volist[$name]=$txt;	
	$list[$name1]=$txt1;
		$this->data['kysmarty']['volist']=$volist;
		$this->data['kysmarty']['list']=$list;
	}
	public function error($err,$url='')
	{
		
	 if($url){
	   $str='<meta http-equiv="Content-Type" content="text/html; charset='.__CHARSET__.'" />'."<script  charset='".__CHARSET__."'>alert('$err');window.location.href='$url';</script>";
	 }else{
	   $str='<meta http-equiv="Content-Type" content="text/html; charset='.__CHARSET__.'" />'."<script  charset='".__CHARSET__."'>alert('$err'); history.go(-1);</script>";
	 }
	 echo $str;
	}
	public function jump($url)
	{
	 
	 $str="<script>window.location.href='$url';</script>";
	  echo $str;
	}
	public function datalist($name,$txt){
		global $datalist;
		
		$datalist[$name]=$txt;	
		$this->data['kysmarty']['datalist']=$datalist;
	}
	public function getform($name){
   $this->form=$name;
   $this->class=getfunname(0);
   
   }
   public function _init_time(){}
   public function _destruct_time(){}
   protected function redirect($url, $status = 302) {
		header('Status: ' . $status);
		header('Location: ' . str_replace(array('&amp;', "\n", "\r"), array('&', '', ''), $url));
		exit();				
	}
	/*
	public function __call($name, $arguments){}
	public function __get($name){}
	public function __set($name,$value){}	
	public function __toString($name){}
	public function __clone(){}
	public function __sleep(){}
	public function __wakeup(){}
	public function __isset($name){}
	public function __unset($name){}
	public function __set_state(){}
	*/
	public function __destruct(){
		$this->_destruct_time();
	
	}
	
}
?>