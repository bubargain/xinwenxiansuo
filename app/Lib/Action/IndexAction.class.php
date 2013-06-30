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
	
	public function footer()
	{
		$this->display();
	}

    /**
    +----------------------------------------------------------
    * 探针模式
    +----------------------------------------------------------
    */
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

}
?>