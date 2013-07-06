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
    {	
    	
    	$this->title ="新闻线索中文网";
        $this->display("Index:index");

    }
	
	public function about()
	{
		$this->display("Index:aboutus");
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
    	$media = M('media');
    	$this->central_media = $media -> query('select * from sx_media where media_catagory =1');
    	$this->local_media = $media -> query('select * from sx_media where media_catagory =2');
    	$this->self_media = $media -> query('select * from sx_media where media_catagory =3');
    	
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
     * save form into db and send emails
     * @author daniel
     */
    public function uploadForm()
    {
    	$data = Array();
    	$data['title']=$this->_post('title');
    	$data['catagory']=$this->_post('catagory');
    	$data['contents']= $_POST['myEditor'];
    	
    	if($this->_post('annUpload') == null  ) //非匿名提交
    	{
    		$udata['user_name'] = $this->_post('author');
    		$udata['telephone'] = $this->_post('phone');
    		$udata['email'] = $this->_post('email');
    		$udata['address']=$this->_post('address');
    		$user = M('user');
    		$data['user_id']=$user->add($udata);
    	}
    	else 
    	{
    		$data['user_id'] = 0;
    	}
    	$news = M('news');
    	$news_id=$news->add($data);
    	$newstomedia = M('newstomedia');
    	foreach($_POST['media'] as $oneRow)
    	{
    		$newstomedia->add(Array(
    				'news_id' => $news_id,
    				'media_id' => $oneRow
    		));
    	}
    	
    }
}
?>