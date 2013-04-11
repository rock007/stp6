
<?php $this->beginContent('//layouts/main'); ?>

<div class="container">
      	<div class="row">
      			
			<div class="span3">
			
			<div class="well">
			<img src="images/andyliu11.jpg" alt=" admin level 20 " width="200px" height="200px">
			
			<span>admin</span>
			</div>
			
			<!-- 功能菜单 -->
			<div class="well">
			
			<div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                  公司库
                </a>
              </div>
              <div id="collapseOne" class="accordion-body in" style="height: auto;">
                <div class="accordion-inner">

            <ul class="nav nav-list">
              <li class="active"><a href="index.php?r=Company">查询</a></li>
              <li><a href="index.php?r=Company/create">添加</a></li>
              <li><a href="#">分类整理</a></li>
              <li><a href="#">跟踪</a></li>             
            </ul>

                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                  客户资料
                </a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse" style="height: 0px;">
                <div class="accordion-inner">
            
            <ul class="nav nav-list">
              <li ><a href="#">查询</a></li>
              <li><a href="#">添加</a></li>
              <li><a href="#">分类</a></li>
              <li><a href="#">备注</a></li>             
            </ul>

                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                  业务记录
                </a>
              </div>
              <div id="collapseThree" class="accordion-body collapse" style="height: 0px;">
                <div class="accordion-inner">		    
		    <ul class="nav nav-list">
              <li ><a href="#">本周拜访</a></li>
              <li><a href="#">日报</a></li>
              <li><a href="#">拜访记录查询</a></li>                           
            </ul>

                </div>
              </div>
            </div>
          </div>

			
			</div>
			
			<!--访问列表 -->
			<div class="well">
			<label>访客列表</label>
			
				<ul>
			<li> <a>guest</a>今天 12：00 </li>
			<li> <a>guest</a>今天 12：00</li>
    		<li> <a>guest</a>今天 12：00</li>
			<li> <a>guest</a>今天 12：00</li>
			<li> <a>guest</a>今天 12：00</li>
			<li> <a>guest</a>今天 12：00</li>


			</ul>

			
			</div>
			
			</div>	
			
			<!-- 个人信息模板页内容 -->
            <?php echo $content; ?>
		</div>

	</div>

<?php $this->endContent(); ?>

