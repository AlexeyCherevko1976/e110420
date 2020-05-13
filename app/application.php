<?
class application{
	public $post, $request;
	function __construct(){
		$this->request=new request();
		$this->request->data="DATA IT IS!<BR>"; 
		if (isset($_POST)){
			//$this->post=$_POST;
		}else{
			//$this->post="POST IT IS";
		}
		
	}
}

class request{
	public $data;
}
?>