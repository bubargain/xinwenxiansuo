<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo ($title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
	<link href="__PUBLIC__/css/index.css" rel="stylesheet">
    <link href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.bootcss.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">主页</a></li>
          <li><a href="/Index/about">关于我们</a></li>
          <li><a href="/Index/about#cop">媒体合作</a></li>
        </ul>
        <h3 class="muted">新闻爆料</h3>
      </div>

      <hr>

      <div class="jumbotron">
        <h1>让媒体听到您的声音</h1>
        <p class="lead" style="text-align:left">我们帮助您将匿名/公开爆料信息以最快的速度传递给全国主流媒体及自媒体渠道，并全力保障您的权益和隐私权不受侵犯。</p>
        <a class="btn btn-large btn-success" href="/Index/newsform">立刻爆料</a>
        <br/>
        <br/>
      </div>

      <hr>
		
  
            <div class="row-fluid marketing">
        <div class="span6">
          <h4>著作权享有</h4>
          <p>爆料人将完全享有对爆料内容的所有权和收益权，同时也应对信息的真实性承担责任.</p>

          <h4>隐私保护</h4>
          <p>您可以选择以实名或匿名方式爆料.如果选择匿名方式，则本平台将不会记录关于您的任何个人信息.	</p>

        </div>

        <div class="span6">
          <h4>关于爆料内容使用</h4>
          <p>只有您选择的媒体会收到您发布的爆料内容</p>

          <h4>爆料方式</h4>
          <p>除了登录我们的网站，你还可以通过电子邮件，微博，微信（待开通）等方式进行爆料</p>

        </div>
      </div>

      <hr>

     
<footer class="footer">
      <div class="container">
        <p> Copyright by @ 新闻线索 2013</p>
      </div>
    </footer>

 
 <script src="//cdnjs.bootcss.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script src="//cdnjs.bootcss.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
 <script src="__PUBLIC__/js/bootstrap.min.js"></script>
  <script src="__PUBLIC__/js/bootstrap-scrollup.js"></script>
    <script>
      $(document).ready(function(){
        $("img.lazy").unveil();
        
             $("#start-intro").click(function(){
                bootstro.start();    
            });

             $.scrollUp({
                  scrollName: 'scrollUp', // Element ID
                  topDistance: '300', // Distance from top before showing element (px)
                  topSpeed: 300, // Speed back to top (ms)
                  animation: 'fade', // Fade, slide, none
                  animationInSpeed: 200, // Animation in speed (ms)
                  animationOutSpeed: 200, // Animation out speed (ms)
                  scrollText: '', // Text for element
                  activeOverlay: false  // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            });
          });
    </script>
        
  <SCRIPT LANGUAGE="JavaScript">
  	$('#annUpload').tooltip('hide')
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

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//cdnjs.bootcss.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>

  </body>
</html>