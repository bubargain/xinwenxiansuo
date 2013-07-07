<?php 
header("Content-type: text/html; charset=utf-8");
class AdminAction extends Action
{
	public function index()
	{
		$this->display('index');
	}
	
	public function sendMail()
	{
		try {
		echo "im sending now";
		var_dump(think_send_mail("danielma@bubargain.com",'mayuxiang',"Greeting from daniel","<html><body>hi<img src='http://photocdn.sohu.com/20130707/Img380921033.jpg'/></body></html>"));
		echo "i guess we finished";
		$this->display('index');
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function head()
	{
		$this->display();
	}
	public function footer()
	{
		$this->display();
	}
	public function addmedia()
	{
		if($_POST['pass']=='bubargain@)!@')
		{
			$data = Array();
			$data['media_name']=$_POST['media_name'];
			$data['media_catagory']=$_POST['catagory'];
			$data['thumb']=$_POST['pic'];
			$data['media_email'] = $_POST['media_email'];
			$media = M('media');
			$line=$media->add($data);
			var_dump($line);
		}
		else 
		{
			echo "<script>alert('错误密码');</script>";
		}
		$this->display();
		
	}
}