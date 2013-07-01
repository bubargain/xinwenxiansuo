<?php
// 本文档自动生成，仅供测试运行
header("Content-type: text/html; charset=utf-8");
class IndexAction extends Action
{
    /**
    +----------------------------------------------------------
    * 默认操作
    +----------------------------------------------------------
    */
    public function index()
    {	 $this->title ="新闻线索中文网";
        $this->display("Index:index");

    }
	
	public function head()
	{
		$this->display();
	}
	
	public function footer()
	{
		$this->display();
	}

  
    public function newsform()
    {
		$this->list=Array(
			'财经',
			'生活娱乐',
			'时政',
			'社会',
			'环保',
			'公益',
			'科技',
			'体育',
			'国际',
			'其他'
			
		);
		
    	$this->display();
    	
    }

    /*
     * save the form into db
     * @author daniel
     */
    public function uploadForm()
    {
    	$data = Array();
    	$data['title']=$this->_post('title');
    	$data['catagory']=$this->_post('catagory');
    	$data['contents']= $_POST['myEditor'];
    	
    	
    	if(! $this->_post('annUpload')  ) //非匿名提交
    	{
    		$author = $this->_post('author');
    		$phone = $this->_post('phone');
    		$email = $this->_post('email');
    		$address=$this->_post('address');
    	}
    	else 
    	{
    		$data['user_id'] = 0;
    	}
    	var_dump($data);
    	
    }
}
?>