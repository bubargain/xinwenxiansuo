<?php 
header("Content-type: text/html; charset=utf-8");
class AdminAction extends Action
{
	function index()
	{
		$this->display();
	}
}