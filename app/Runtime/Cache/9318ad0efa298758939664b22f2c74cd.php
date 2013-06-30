<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    
    <title>快速发布爆料内容</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="新闻线索爆料">
    <meta name="author" content="xinwenxiansuo新闻线索">
    <meta name="keywords" content="新闻线索，新闻爆料，news clue,新闻，匿名爆料">
    <meta name="robots" content="index,follow">
    <meta name="application-name" content="bootcss.com">

    <!-- Le styles -->
    <link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="__PUBLIC__/assets/css/docs.css" rel="stylesheet">
    <link href="__PUBLIC__/css/editor.css" rel="stylesheet">
    <style>
    h1, h2, h3, .masthead p, .subhead p, .marketing h2, .lead
{
  font-family: "Helvetica Neue", Helvetica, Arial, "Microsoft Yahei UI", "Microsoft YaHei", SimHei, "\5B8B\4F53", simsun, sans-serif;
  font-weight: normal;
}

#scrollUp {
  bottom: 20px;
  right: 20px;
  height: 38px;  /* Height of image */
  width: 38px; /* Width of image */
  background: url("assets/img/top.png") no-repeat;
}
    </style>
    <link href="__PUBLIC__/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="__PUBLIC__/assets/css/bootstro.min.css"  rel="stylesheet">
 

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.bootcss.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="__PUBLIC__/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="__PUBLIC__/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="__PUBLIC__/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="__PUBLIC__/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="__PUBLIC__/assets/ico/favicon.png">


    <script>
var _hmt = _hmt || [];
window.UEDITOR_HOME_URL = '__PUBLIC__/ueditor/';
</script>
<script  src="__PUBLIC__/ueditor/ueditor.config.js"></script>
	<script  src="__PUBLIC__/ueditor/ueditor.all.js"></script> 
  </head>
   
  
  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/">新闻线索</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="/Index/index">首页</a>
              </li>
              

              <li class="">
                <a href="/Index/about">关于我们</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  
  
<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>发布线索内容</h1>
    <p class="lead">请发布真实有效的信息，并提供有说服力的辅助材料，以帮助媒体验证信息真实性。	</p>
  </div>
</header>

<div class="bs-docs-social">
<br/>
</div>

<div class="container">
	<form class="navbar-form" enctype="multipart/form-data" method='post'>
        <fieldset>
        <legend>信息概要</legend>
        <label>标题（少于50字）：</label>
        <input type="text" class="span6" placeholder="输入描述信息" required>
        <span class="help-block">请简明清晰的描述信息（少于50字）：</span>
       
        <label>类别</label>
            <div class="btn-group">
          
                <select name="catalog"  >
                	<?php if(is_array($list)): foreach($list as $key=>$data): ?><option value='<?php echo ($data); ?>'><?php echo ($data); ?></option><?php endforeach; endif; ?>	 
                </select>
             
    		</div>
		<br/>
		<legend>详细信息</legend>    
        <div>   
       		<textarea name="后台取值的key" id="myEditor" style="min-height:300px">请详细描述您要报道的信息...</textarea>
			<script type="text/javascript">
                //var editor = new UE.ui.Editor();
                //editor.render("myEditor");
                //1.2.4以后可以使用一下代码实例化编辑器
                UE.getEditor('myEditor')
            </script> 
       	    <span class="help-block">对事件的详细描述，可以添加图片，视频等资料</span>
        </div>
 
        <div>
        <br/>	
            <legend >个人资料
                 <label class="checkbox">
                    <input type="checkbox" id="personalInfoCheckbox" onclick="setPersonalInfo();">匿名提交
                 </label>
            </legend>
            
            <div id="personalInfo" style="display:inline">
                <div class="controls">
                    <span class="span4">姓名：<input type="text" placeholder="姓名"/></span>
                    <span class="span4">联系方式：<input type="text" placeholder="联系电话/手机"/></span>
                    <span class="span4">电子邮箱：<input type="email"  placeholder="电子邮箱" /></span>
                </div>
                <div class="controls">
                    <span class="span12">地址：<input class="span6" type="text" placeholder="您的邮寄地址"/></span>
                </div>
            </div>
        </div>
        
        <br/>
        <legend>选择发送媒体</legend>
    	
    	<div class="span12">
    	
    	      <ul class="nav nav-pills">
                <li class="active">
                <a href="#">中央媒体</a>
                </li>
                <li><a href="#">地方媒体</a></li>
                 <li><a href="#">名记</a></li>
                <li><a href="#">自媒体</a></li>
                </ul>

      
       </div>
        
        
        
        <br/>
        <legend>完成</legend>
         <label class="checkbox">
       		 <input type="checkbox"><a href="/Index/intro" target="_blank"> 阅读并同意新闻线索权利及义务声明</a>
         </label>
        <button type="submit" class="btn btn-primary">确认提交</button>
        </fieldset>
    </form>
</div>


<footer class="footer">
      <div class="container">
        <p> Copyright by @ 新闻线索 2013</p>
      </div>
    </footer>



 
 <script src="//cdnjs.bootcss.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script src="__PUBLIC__/js/bootstrap.js"></script>
        
  <SCRIPT LANGUAGE="JavaScript">
	function setPersonalInfo()
	{
			if(document.getElementById('personalInfoCheckbox').checked)
			{
				document.getElementById('personalInfo').style.display="none";
			}
			else
			{
				document.getElementById('personalInfo').style.display="inline";
			}
			
	}
	
  </script>
  
</body>
</html>