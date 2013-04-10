<!DOCTYPE html>
<html lang="en">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

   <title><?php echo CHtml::encode($this->pageTitle); ?></title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/page.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png">
</head>
<body>

 <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="javascript:void(0)"><?php echo CHtml::encode(Yii::app()->name); ?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="/">首页</a></li>
            <!--<li><a href="#contact">代码园</a></li>-->
              <li><a href="#about">关于</a></li>
              <li><a href="#contact">联系</a></li>
            </ul>
            <p class="navbar-text pull-right">欢迎：<a href="my.html">admin</a></p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    
     <div class="container">
      <div class="row">
      
        <div class="span9">
        	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
        <?php echo $content; ?>
        
     
        </div><!--/span-->
        
        <div class="span3">
        
        <div class="well">
          <form class="form-horizontal">
  <fieldset>
    <legend>用户登录</legend>
    <p>
    用户: <input type="text" id="input01"  style="width:150px;">
    </p>
    
    <p>
     密码: <input type="text" id="input02"  style="width:150px;" >
      </p>
      <div style="display:none">
        <p class="help-block">错误提示</p>
      
    </div>
    <label class="checkbox">
    <input type="checkbox"> 记住我
  </label>
  <button type="submit" class="btn btn-primary">登录</button>
  
  <a  href="#" class="btn btn-primary" >还没有，注册一个！</a>
  </fieldset>
</form>
</div>
          <div class="well sidebar-nav">
          
          </div><!--/.well -->
        </div><!--/span-->
        
      </div><!--/row-->
</div>

      <hr>
      
       <footer>        
        Copyright &copy; <?php echo date('Y'); ?> by Stp6.com.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
      </footer>

	<script src="js/jquery.js"></script>

</body>
</html>
